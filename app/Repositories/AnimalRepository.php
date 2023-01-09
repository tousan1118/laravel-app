<?php

namespace Repository;


use Illuminate\Support\Facades\DB;
use App\Repositories\AnimalRepositoryInterface;
use Domain\Animal\Animal;
use Domain\Animal\AnimalId;

class AnimalRepository implements AnimalRepositoryInterface
{
    /**
     * @param Animal $animal
     * @return mixed
     */
    public function save(Animal $animal)
    {
        DB::table('Animals')
            ->updateOrInsert(
                ['id' => $animal->getId()],
                ['name' => $animal->getName()]
            );
    }

    /**
     * @param AnimalId $id
     * @return Animal
     */
    public function find(AnimalId $id)
    {
        $animal = DB::table('Animals')->where('id', $id->getValue())->first();

        return new Animal($id, $animal->name);
    }

    /**
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public function findByPage($page, $size)
    {
        // TODO: Implement findByPage() method.
    }
}