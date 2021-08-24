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

    public function createForm() {

        return view('/events/create');    
    }

    public function Form(Request $request)

    {

        $event = new dados;

        $event->nome = $request->nome;
        $event->telefone = $request->telefone;
        $event->email = $request->email;
        $event->imagem = $request->imagem;
        
        /* imagem upload form*/
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("new")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }
    
        $event->save();
    
        return redirect('/');
        
    }
}
