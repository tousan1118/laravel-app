<?php

namespace Repository;


use Illuminate\Support\Facades\DB;
use App\Repositories\AnimalRepositoryInterface;
use Domain\Animal\Animal;
use Domain\Animal\AnimalId;

class InMemoryAnimalRepository implements AnimalRepositoryInterface
{
        private $db = [];
        
    /**
     * @param Animal $animal
     * @return mixed
     */
    public function save(Animal $animal)
    {
        $this->db[$animal->getId()->getValue()] = $animal;
        var_dump($this->db);
    }

    /**
     * @param AnimalId $id
     * @return Animal
     */
    public function find(AnimalId $id)
    {
        $found = $this->db[$id->getValue()];
        return $this->clone($found);
    }

        /**
     * @param Animal $user
     * @return Animal
     */
    private function clone(Animal $animal){
        $cloned = new Animal($animal->getId(), $animal->getName());
        return $cloned;
    }

    /**
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public function findByPage($page, $size)
    {
        $start = ($page - 1) * $size;
        return array_slice($this->db, $start, $size);
    }
}