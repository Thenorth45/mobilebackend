<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = ['name' => 'index', 'payload' => Product::all()];
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $newproduct = Product::create([
            'product_name' => $request -> product_name,
            'product_type' => $request -> product_type,
            'price' => $request -> price,
        ]);
        return $newproduct;

        return "Create Success";
        // $result = ['name' => 'store','payload' => $request ->all()];
        // return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $payload = Product::where('id', 1);
        $payload = Product::find($id);
        return ['name' => 'show', 'payload' => $payload];
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
        $product = Product::find($id);

        $product -> product_name = $request -> product_name;

        $product->save();

        Product::where('id', $id)
      ->where('product_name', $request -> product_name)
      ->update(['delayed' => 1]);

        return "Update success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        $product = Product::find($id);
 
        $product->delete();

        return "Delete Success";
    }
}
