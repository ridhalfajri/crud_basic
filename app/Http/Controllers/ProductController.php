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
        //? TAMPILAN SEMUA DATA  CTH : TABLE
        //*AMBIL SEMUA DATA YANG DIBUTUHKAN
        $products = Product::all();

        //*RETURN VIEW YANG AKAN TAMPIL  BESERTA BAWA SEMUA DATA YANG DIBUTUHKAN
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //? TAMPILAN FORM CREATE DATA

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //? SIMPAN DATA (LOGIC)
        $product = new Product();
        $this->save($product, $request);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //? TAMPILAN DETAIL DARI DATA
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
        //? TAMPILAN FORM EDIT DATA
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //? UPDATE DATA (LOGIC)
        $this->save($product, $request);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    protected function save($product, $request)
    {
        $product->name = $request->name_product;
        $product->category_id = $request->category;
        $product->quantity = $request->quantity;
        $product->expire_date = $request->expired;
        $product->save();
    }
}
