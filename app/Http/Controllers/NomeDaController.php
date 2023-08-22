<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelBooks;
use App\Models\User;

class NomeDaController extends Controller
{
    private $objUser;//
    private $objBook;

    public function __construct()
    {
        //Vindo da Models
        $this->objUser=new User();
        $this->objBook=new ModelBooks();
    }
   /* public function indexJson()
    {
        //Tela inicial
       dd($this->objBook->find(6)->relUser);

       //chamar o id do usuario e depois o metodo books
    }*/

    public function indexTela()
    {
        //Tela inicial, pegando os dados da tebela e jogando para view
        $book= $this->objBook->all(); //mostrando todos os dados da tabela book
         return view('index', compact ('book'));//compact criar um arry associativo onde as chaves sao os valores das variaveis

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //Para Mostrar na Tela o id
        echo $id;
        //Procurar pelo id 
        //$book= $this->objBook->find($id);//Procurar o id na tabela
        // return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
