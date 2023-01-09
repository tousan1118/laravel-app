<?php

namespace Domain\Animal;


class Animal
{
    /**
     * @var AnimalId
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * Animal constructor.
     * @param AnimalId $id
     * @param string $name
     */
    public function __construct(AnimalId $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return AnimalId
     */
    public function getId(): AnimalId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}