<?php

namespace App\Http\Controllers;

use App\Card;

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{

    public function index()
    {

        $cards = Card::all();

        return view('cards.index', compact('cards'));

    }

    public function show(Card $card)
    {
        // Typehints card as type card

        //$card = Card::find($id);

        //struggling to create user for notes, similar function as note for cards???

        //$card = Card::with('notes.user')->find(2);

        //Can't get notes to register a user in the json restful api???

        $card->load('notes.user');

        //return $card;

        return view('cards.show', compact('card'));

    }

}
