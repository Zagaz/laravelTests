<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show list
        echo "INDEX -> Show list of products";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //The form
        echo "CREATE -> Show form to create a new product";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Send form
        echo "STORE -> Send form to create a new product";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Show product
        echo "SHOW -> Show product $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //form edit
        echo "EDIT -> Show form to edit product $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Send form edited
        echo "UPDATE -> Send form to edit product $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete
        echo "DESTROY -> Delete product $id";
    }
}
