<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;

//allowed to remove this import since it's in the same directory
//use App\Http\Controllers\Controller;





class PageController extends Controller
{

    public function home()
    {

        $pokemon = ['Bulbasaur', 'Charmander', 'Squirtle'];

        return view('welcome', ['pokemon' => $pokemon]);
        

    }

}
