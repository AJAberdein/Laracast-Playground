<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;

use App\Note;

use App\Http\Requests;

class NotesController extends Controller
{

    public function store(Request $request, Card $card) {

//1
        //this method of creating a note calls a function in the card model



        $card->addNote(

            new Note($request->all())

        );

        return back();




        //ALTERNITIVE METHODS FOR PASSING CREATING A NEW NOTE USING THE MODEL---------------------

        //remember to us the fillable mwthod to allow you to pass the parameter in case of forgery

//2
//        $note = new Note(['body' => $request->body]);

//3
//        $card->notes()->save([
//
//            new Note(['body' => $request->body])
//
//        ]);

//4
//        $card->notes()->create([
//
//            'body' => $request->body
//
//        ]);

//5
//        $card->notes()->create($request->all());

//6
//        $note = new Note;
//
//        $note->body = $request->body;
//
//        $card->notes()->save($note);




        //ALTERNITIVE METHODS FOR CALLING THE REQUEST OBJECT--------------------------------------


        //return $request->all();
        //Need to inject and pass request object as a parameter and reference it

        //return \Request::all();
        //Not necesary to pass request as a parameter

        //return request()->all();
        //Not necesary to pass request as a parameter




    }


}
