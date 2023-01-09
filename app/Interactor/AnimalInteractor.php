<?php

namespace App\Interactor;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Interactor\AnimalInteractorInterface;
use App\Repositories\AnimalRepositoryInterface;

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
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }
}