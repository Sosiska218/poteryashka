<?php

namespace App\Http\Controllers;

use App\Http\Requests\Found\StoreRequest;
use Illuminate\Http\RedirectResponse;

class FoundController extends Controller
{
    public function submit(StoreRequest $request): RedirectResponse
    {
        $user = auth()->user();

        $user->founds()->create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('found');
    }
}
