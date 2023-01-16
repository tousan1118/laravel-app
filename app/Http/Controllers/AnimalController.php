<?php

namespace App\Http\Controllers;

use App\Http\Requests\Animal\Create\AnimalCreateRequest;
use App\Interactor\AnimalInteractorInterface;
use App\Models\AnimalCreateViewModel;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  AnimalInteractorInterface  $interactor
     * @param  Request  $request
     * @return view
     */
    public function __invoke(AnimalInteractorInterface $interactor, Request $request)
    {
        $name = $request->input('name');
        $request = new AnimalCreateRequest($name);
        $response = $interactor->handle($request);

        // TODO Viewの生成をController以外に委任する
        $viewModel = new AnimalCreateViewModel($response->getCreatedUserId(), $name);
        return view('user.index', compact('viewModel'));
    }
}
