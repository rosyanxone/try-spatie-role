<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Product List';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Product Create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Product Store';
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return 'Product Show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return 'Product Edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        return 'Product Update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return 'Product Destroy';
    }
}
