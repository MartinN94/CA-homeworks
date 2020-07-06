<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;
use Facade\FlareClient\Http\Response;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Cards::all();

        return view('cards.index', ['cards' => $cards]);
    }

    public function show($id)
    {
        $card = Cards::findOrFail($id);

        return view('cards.show', ['card' => $card]);
    }

    public function create()
    {
        return view('cards.create');
    }

    public function store(Cards $card)
    {
        Cards::create($this->validateCards())->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $card = Cards::findOrFail($id);

        return view('cards.edit', ['card' => $card]);
    }

    public function update(Cards $card, $id)
    {
        $card = Cards::find($id);
        $card->update($this->validateCards());
        $card->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $card = Cards::find($id)->delete();

        return redirect('/');
    }

    protected function validateCards()
    {
        return request()->validate([
            'title' => 'required',
            'img' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);
    }
}
