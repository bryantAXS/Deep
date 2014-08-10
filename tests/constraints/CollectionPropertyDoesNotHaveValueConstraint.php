<?php

class CollectionPropertyDoesNotHaveValueConstraint extends PHPUnit_Framework_Constraint
{
    /**
     * @var mixed
     */
    protected $expected;

    public function __construct($expected, $property)
    {
        parent::__construct();

        $this->expected = is_array($expected) ? $expected : [$expected];
        $this->property = $property;
    }

    public function matches($input)
    {
        foreach ($input as $row) {
            if (in_array($row->{$this->property}, $this->expected)) {
                return false;
            }
        }

        return true;
    }

    public function toString()
    {
        return sprintf('%s has one of the values from %s', $this->property, json_encode($this->expected));
    }
}
