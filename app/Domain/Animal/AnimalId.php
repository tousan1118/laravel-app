<?php

namespace Domain\Animal;


class AnimalId
{
    private $value;

    /**
     * AnimalId constructor.
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}