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
 * Hydrator for the Parent Relationships
 */
class ParentsHydrator extends AbstractHydrator
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

        $this->relationshipCollection = $this->model->parents($collection->modelKeys())->get();

        foreach ($this->relationshipCollection as $entry) {
            if (! isset($this->entries[$entry->child_id])) {
                $this->entries[$entry->child_id] = array();
            }

            $this->entries[$entry->child_id][] = $entry;
        }

        // add these entry IDs to the main collection
        $collection->addEntryIds($this->relationshipCollection->modelKeys());
    }

    /**
     * {@inheritdoc}
     */
    public function hydrate(AbstractEntity $entity, AbstractProperty $property)
    {
        $entries = isset($this->entries[$entity->getId()]) ? $this->entries[$entity->getId()] : array();

        $value = $this->relationshipCollection->createChildCollection($entries);

        $entity->setAttribute($property->getName(), $value);

        return $value;
    }
}
