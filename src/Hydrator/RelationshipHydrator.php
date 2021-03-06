<?php

/**
 * Deep
 *
 * @package      rsanchez\Deep
 * @author       Rob Sanchez <info@robsanchez.com>
 */

namespace rsanchez\Deep\Hydrator;

use Illuminate\Database\Eloquent\Model;
use rsanchez\Deep\Collection\EntryCollection;
use rsanchez\Deep\Collection\RelationshipCollection;
use rsanchez\Deep\Model\AbstractProperty;
use rsanchez\Deep\Model\AbstractEntity;
use rsanchez\Deep\Hydrator\AbstractHydrator;
use rsanchez\Deep\Model\RelationshipEntry;

/**
 * Hydrator for the Relationship fieldtype
 */
class RelationshipHydrator extends AbstractHydrator
{
    /**
     * @var \rsanchez\Deep\Model\RelationshipEntry
     */
    protected $model;

    /**
     * {@inheritdoc}
     */
    public function __construct(EntryCollection $collection, $fieldtype, RelationshipEntry $model)
    {
        parent::__construct($collection, $fieldtype);

        $this->model = $model;

        $this->relationshipCollection = $this->model->parentEntryId($collection->modelKeys())->get();

        foreach ($this->relationshipCollection as $entry) {
            $type = $entry->grid_field_id ? 'grid' : 'entry';
            $entityId = $entry->grid_field_id ? $entry->grid_row_id : $entry->parent_id;
            $propertyId = $entry->grid_field_id ? $entry->grid_col_id : $entry->field_id;

            if (! isset($this->entries[$type][$entityId][$propertyId])) {
                $this->entries[$type][$entityId][$propertyId] = array();
            }

            $this->entries[$type][$entityId][$propertyId][] = $entry;
        }

        // add these entry IDs to the main collection
        $collection->addEntryIds($this->relationshipCollection->modelKeys());
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(AbstractEntity $entity, AbstractProperty $property)
    {
        $entries = isset($this->entries[$entity->getType()][$entity->getId()][$property->getId()])
            ? $this->entries[$entity->getType()][$entity->getId()][$property->getId()] : array();

        $value = $this->relationshipCollection->createChildCollection($entries);

        $entity->setAttribute($property->getName(), $value);

        return $value;
    }
}
