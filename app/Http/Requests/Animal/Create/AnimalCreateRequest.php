<?php

namespace App\Http\Requests\Animal\Create;

class AnimalCreateRequest
{
    /**
     * @var string
     */
    private $name;

    /**
     * AnimalCreateRequest constructor.
     * @param string $createdUserId
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}