<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    private $clientes = [
        ['id'=>1, 'nome' => 'pedro'],
        ['id'=>2, 'nome' => 'jose'],
        ['id'=>3, 'nome' => 'maria'],
        ['id'=>4, 'nome' => 'jennifer']
        
    ];


    public function __construct()
    {
        $clientes = session('clientes');
        if (!isset($clientes))
            session(['']);
    }
        
        
        # code...
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = $this->clientes;
        return view('clientes.index', compact(['clientes']));
    }
    
    # code...
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = count($this->clientes) + 1;
        $nome = $request->nome;
        $dados = ['id'=>$id, 'nome'=>$nome ];
        $this->clientes[] = $dados;
        //return redirect()->route('clientes.index'); como não estamos usamos bd não é a melhor opção 
        //dd($this->clientes);

        $clientes = $this->clientes;
        return view('clientes.index', compact(['clientes']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}