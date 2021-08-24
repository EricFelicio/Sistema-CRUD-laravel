<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* function para retornar o view welcome blade como index */
class AgendaController extends Controller
{
    public function index() {

        return View('welcome');
    }
}
