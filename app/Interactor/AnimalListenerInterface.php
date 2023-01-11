<?php

namespace App\Interactor;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Requests\Animal\Create\AnimalCreateRequest;

interface AnimalInteractorInterface
{
    /**
     * @param AninmalCreateRequest $request
     * @return void
     */
    public function handle(AnimalCreateRequest $request);
}
