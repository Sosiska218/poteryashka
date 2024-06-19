<?php

namespace App\Http\Controllers;


use App\Http\Requests\Lost\StoreRequest;
use Illuminate\Http\RedirectResponse;

class LostController extends Controller
{
    public function submit(StoreRequest $request): RedirectResponse
    {
        $user = auth()->user();

        $user->losts()->create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('lost');
    }
}
