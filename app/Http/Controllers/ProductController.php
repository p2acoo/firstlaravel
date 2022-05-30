<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{

    public function index(): \Illuminate\Http\Response
    {
        //

        $products = Product::all();

        return Response::view('products.index', compact('products'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product): \Illuminate\Http\Response
    {
        //
        $product = Product::find($product->id);
        return Response::view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product

     */
    public function edit(Product $product)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     */
    public function destroy(Product $product)
    {
        //
    }
}
