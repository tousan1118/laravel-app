<?php

namespace App\Interactor;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

interface AnimalInteractorInterface
{
        /**
     * @param AninmalCreateRequest $request
     * @return void
     */
    public function handle(AninmalCreateRequest $request);
}