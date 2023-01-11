<?php

namespace App\Interactor;

use App\Interactor\AnimalInteractorInterface;
use App\Repositories\AnimalRepositoryInterface;
use App\Http\Requests\Animal\Create\AnimalCreateRequest;
use App\Http\Response\Animal\Create\AnimalCreateResponse;
use Domain\Animal\Animal;
use Domain\Animal\AnimalId;

class AnimalInteractor implements AnimalInteractorInterface
{
    /**
     * @var AnimalRepositoryInterface
     */
    private $animalRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(AnimalRepositoryInterface $animalRepository)
    {
        $this->animalRepository = $animalRepository;
    }

    /**
     * @param  object  $event
     * @return void
     */
    public function handle(AnimalCreateRequest $request)
    {
        $animalId = new AnimalId(uniqid());
        $createAnimal = new Animal($animalId, $request->getName());
        $this->animalRepository->save($createAnimal);

        return new AnimalCreateResponse($animalId->getValue());
    }
}
