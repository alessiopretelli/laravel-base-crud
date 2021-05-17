<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Dress::all();
        
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'brand' => 'required|max:50',
            'type' => 'required|max:50',
            'color' => 'required|max:50',
            'price' => 'required|numeric|max:999',
            'model' => 'required|max:50',
            'description' => 'required|max:200',
            'size' => 'required|unique:dresses|max:5'
        ]);

        $new_dress = new Dress;

        $new_dress->fill($data);

        // $new_dress->brand = $data['brand'];
        // $new_dress->type = $data['type'];
        // $new_dress->model = $data['model'];
        // $new_dress->price = $data['price'];
        // $new_dress->size = $data['size'];
        // $new_dress->color = $data['color'];
        // $new_dress->description = $data['description'];

        $new_dress->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Dress::find($id);

        return view('details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_to_update = Dress::findOrFail($id);
        // @dd($product_to_update);

        return view('edit', compact('product_to_update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $product)
    {
        // @dd($product);
        // @dd($request);
        $data = $request->all();
        $product->update($data);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $product)
    {
        $product->delete();
        
        return redirect()->route('products.index');
    }
}
