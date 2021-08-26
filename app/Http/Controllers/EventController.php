<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dados;

/* function para retornar o view welcome blade como index */
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

    public function delete($id) {

        $event = dados::find($id);
        $event -> delete();

        return redirect('/');
    }

    public function show(Request $request) {


        $event = new dados;

        $event->nome = $request->nome;
        $event->telefone = $request->telefone;
        $event->email = $request->email;
        $event->image = $request->image;
        
        /* imagem upload form*/  
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }

        $event->save();
    
        return redirect('/');   
        
    }
}
