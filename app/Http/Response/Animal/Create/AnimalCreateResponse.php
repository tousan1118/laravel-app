<?php

namespace App\Http\Response\Animal\Create;

class AnimalCreateResponse
{
    /**
     * @var string
     */
    private $createdAnimalId;

    /**
     * UserCreateResponse constructor.
     * @param string $createdUserId
     */
    public function __construct(string $createdAnimalId)
    {
        $this->createdAnimalId = $createdAnimalId;
    }

    /**
     * @return string
     */
    public function getCreatedUserId(): string
    {
        return $this->createdAnimalId;
    }
}
