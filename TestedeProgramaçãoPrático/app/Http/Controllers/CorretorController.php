<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorretorRequest;
use Illuminate\Http\Request;
use App\Models\ModelCorretor;

class CorretorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $objCorretor;

     public function __construct()
     {
        $this->objCorretor=new ModelCorretor();
     }

    public function index()
    {
        $corretor=ModelCorretor::all();
        return view('index', compact('corretor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('corretor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CorretorRequest $request)
    {
        $cpfExistente = $this->objCorretor->where('cpf', $request->cpf)->exists();
        $creciExistente = $this->objCorretor->where('creci', $request->creci)->exists();

        if ($cpfExistente) {
            return redirect('corretores')->with('error', 'CPF já cadastrado. Não é possível realizar o cadastro.');
        }

        if ($creciExistente) {
            return redirect('corretores')->with('error', 'CRECI já cadastrado. Não é possível realizar o cadastro.');
        }

        $cadastro = $this->objCorretor->create([
            'cpf' => $request->cpf,
            'creci' => $request->creci,
            'nome' => $request->nome
        ]);

        if ($cadastro) {
            return redirect('corretores')->with('success', 'Cadastro realizado com sucesso!');
        } else {
            return redirect('corretores')->with('error', 'Ocorreu um erro ao cadastrar o corretor.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $corretor = ModelCorretor::find($id);
        return view('edit-corretor', compact('corretor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CorretorRequest $request, $id)
    {
        $corretor = ModelCorretor::find($id);
        $corretor->cpf = $request->cpf;
        $corretor->creci = $request->creci;
        $corretor->nome = $request->nome;
        $corretor->save();

        $response = redirect()->route('corretores.index')->with('success', 'Corretor atualizado com sucesso!');
        return $response;
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
