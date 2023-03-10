<?php

namespace App\Repositories;

use Domain\Animal\Animal;
use Domain\Animal\AnimalId;

interface AnimalRepositoryInterface
{
    /**
     * @param Animal $animal
     * @return mixed
     */
    public function save(Animal $animal);

    /**
     * @param AnimalId $id
     * @return mixed
     */
    public function find(AnimalId $id);

    /**
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public function findByPage($page, $size);
}