<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use Illuminate\Support\Facades\Validator;

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

    public function change($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionario.alter', compact('funcionario'));
    }

    public function save(Request $request)
    {
        $dataValidation = $this->validateRequest($request->all());
        if(!$dataValidation->fails())
        {
            $data = [
                'nome'          => $request->get('nome'),
                'rg'            => $request->get('rg'),
                'cpf'           => $request->get('cpf'),
                'email'         => $request->get('email'),
                'telefone'      => $request->get('telefone'),
                'endereco'      => $request->get('endereco'),
                'cargo'         => $request->get('cargo'),
                'salario'       => $request->get('salario'),
                'dt_adimissao'  => $request->get('dt_admimissao'),
                'dt_demissao'   => $request->get('dt_demissao'),


            ];

            try{
                Funcionario::create($data);

                return redirect('/funcionarios');
            }catch(\Exception $e){
                \Flash::error('Não foi possivel cadastrar o funcionários, tente mais tarde.');

                return redirect('/funcionarios');
            }

            
        }else{
            \Flash::error($dataValidation->errors()->first());

            return redirect('/funcionarios');
        }
    }

    public function validateRequest($data)
    {
        
        return Validator::make($data, $this->rules(), $this->messages());


    }

    public function rules()
    {
        return $rules = [
            'nome'          => 'required',
            'rg'            => 'required',
            'cpf'           => 'required',
            'email'         => 'required',
            'telefone'      => 'required',
            'endereco'      => 'required',
            'cargo'         => 'required',
            'salario'       => 'required',
            'dt_admimissao' => 'required'
        ];

    }

    public function messages()
    {
        return $messages = [
            'nome.*'        => 'Nome é obrigatório',
            'rg.*'          => 'RG inválido',
            'cpf.*'         => 'CPF inválido',
            'email.*'       => 'Email invalido',
            'telefone.*'    => 'Telefone inválido',
            'endereco.*'    => 'Endereço obrigatório',
            'cargo.*'       => 'Cargo é obrigatório',
            'salario.*'     => "Salarios é obrigatório",
            'dt_adimissão'  => 'Data de adimissão é obrigatória'

        ];
    }
}
