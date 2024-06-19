<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Found;

class FoundController extends Controller
{
    public function submit(Request $req)
    {
        $found = new Found();
        $found->date=$req->input('date');
        $found->email=$req->input('email');
        $found->number=$req->input('number');
        $found->itemname=$req->input('itemname');
        $found->description=$req->input('description');
        $found->photo=$req->input('photo');

        $found->save();

        return redirect()->route('found');


    }
}
