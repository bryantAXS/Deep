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
use rsanchez\Deep\Model\AbstractProperty;
use rsanchez\Deep\Model\AbstractEntity;
use rsanchez\Deep\Hydrator\AbstractHydrator;
use rsanchez\Deep\Model\PlayaEntry;
use rsanchez\Deep\Collection\PlayaCollection;

/**
 * Hydrator for the Playa fieldtype
 */
class PlayaHydrator extends AbstractHydrator
{
    /**
     * @var \rsanchez\Deep\Model\PlayaEntry
     */
    protected $model;

    /**
     * List of entries in this collection, organized by
     * type, entity and property
     * @var array
     */
    protected $entries;

    /**
     * Collection of entries being loaded by the parent collection
     * @var \rsanchez\Deep\Collection\PlayaCollection
     */
    protected $playaCollection;

    /**
     * {@inheritdoc}
     */
    public function __construct(EntryCollection $collection, $fieldtype, PlayaEntry $model)
    {
        parent::__construct($collection, $fieldtype);

        $this->model = $model;

        $this->playaCollection = $this->model->parentEntryId($collection->modelKeys())->get();

        foreach ($this->playaCollection as $entry) {
            $type = $entry->parent_row_id ? 'matrix' : 'entry';
            $entityId = $entry->parent_row_id ? $entry->parent_row_id : $entry->parent_entry_id;
            $propertyId = $entry->parent_row_id ? $entry->parent_col_id : $entry->parent_field_id;

            if (! isset($this->entries[$type][$entityId][$propertyId])) {
                $this->entries[$type][$entityId][$propertyId] = array();
            }

            $this->entries[$type][$entityId][$propertyId][] = $entry;
        }

        // add these entry IDs to the main collection
        $collection->addEntryIds($this->playaCollection->modelKeys());
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(AbstractEntity $entity, AbstractProperty $property)
    {
        $entries = isset($this->entries[$entity->getType()][$entity->getId()][$property->getId()])
            ? $this->entries[$entity->getType()][$entity->getId()][$property->getId()] : array();

        $value = $this->playaCollection->createChildCollection($entries);

        $entity->setAttribute($property->getName(), $value);

        return $value;
    }
}
