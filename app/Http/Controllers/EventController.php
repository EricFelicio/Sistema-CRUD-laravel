<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dados;

/* function para retornar o view welcome blade como index */
class EventController extends Controller
{
    public function index() {

        $events = dados::all();

        return View('welcome', ['events' => $events]);
    }

    public function create() {

        return view('events.create');    
    }

    /* function para receber os dados do form*/
    public function store(Request $request) {
        $event = new dados;

        $event->nome = $request->nome;
        $event->telefone = $request->telefone;
        $event->email = $request->email;
        $event->imagem = $request->imagem;

        /* imagem upload form*/
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            dd($request->image->store('img/events'));
        }

        $event->save();

        return redirect('/');
    }
}


