<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();

        return view('funcionario.index', compact('funcionarios'));
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('funcionario.create');
    }

    public function show()
    {

        return view('funcionario.show');
    }

    public function change()
    {
        return view('funcionario.alter');
    }

}
