<?php

namespace PositionalData\Segment;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use PositionalData\Field\FieldInterface;

abstract class AbstractSegment implements SegmentInterface
{

    /**
     * @var Collection
     */
    protected $fields;

    public function __construct()
    {
        $this->fields = new ArrayCollection();
    }

    /**
     * @inheritdoc
     */
    public function addField(FieldInterface $field)
    {
        $this->fields->add($field);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setFields(Collection $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Gets a field collection.
     * @return Collection
     */
    public function getFields()
    {
        return $this->fields;
    }
}