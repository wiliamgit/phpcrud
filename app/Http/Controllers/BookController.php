<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBooks;
use App\Models\User;
class BookController extends Controller
{
    private $userli;//
    private $bookli;

    public function __construct()
    {
        $this->usersli=new User();
        $this->bookli=new ModelBooks();
    }
    public function index()
    {
        //Tela inicial
       dd($this->userli);
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
    public function show(string $id)
    {
        //Mostrar view
       echo $id;
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
