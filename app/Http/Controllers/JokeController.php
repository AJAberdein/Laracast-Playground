<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;

//allowed to remove this import since it's in the same directory
//use App\Http\Controllers\Controller;





class JokeController extends Controller
{

    public function jokeYoMomma()
    {

        $joke = 'Yo\' momma is so fat... her petronus is a cake!';

        return view('pages.joke', $joke);
        

    }

    public function jokeBad()
    {
        //return without a view
        return 'What is the difference between a Raiven and a Writing Desk... 
        </br></br></br></br></br></br>
        The both contain quils???';


    }



}
