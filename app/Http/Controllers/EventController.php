<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dados;
use Illuminate\Queue\Jobs\RedisJob;

// function index 
class EventController extends Controller
{
    public function index() {

        $search = request('search');

        if($search) {

            $events = dados::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $events = dados::all();
        }     
    
        return view('welcome',['events' => $events, 'search' => $search]);
    }

    public function create() {
        return view('events.create');    
    }

    // funcion delete 
    public function delete($id) {

        $event = dados::find($id);
        $event -> delete();

        return redirect('/');
    }

    // function edit 
    public function edit($id) {
        
        $event = dados::findOrFail($id);

        return view('events.edit', ['event' => $event]);

    }

    public function update(Request $request) {
        
        $event = dados::findOrFail($id);

        $event->nome = $request->nome;
        $event->telefone = $request->telefone;
        $event->email = $request->email;
        $event->image = $request->image;

        $event->save();
    
        return redirect('/')->with('msg', 'Usuario alterado com sucesso.');

    }
    // function create users 
    public function show(Request $request) {


        $event = new dados;

        $event->nome = $request->nome;
        $event->telefone = $request->telefone;
        $event->email = $request->email;
        $event->image = $request->image;

        $event->save();
    
        return redirect('/');   
        
    }
}
