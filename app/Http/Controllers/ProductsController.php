<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Department;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::all();
        return view('products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('newProduct', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products;
        $product->name = $request->input('nameProduct');
        $product->stock = $request->input('stockProduct');
        $product->price = $request->input('priceProduct');
        $product->department_id = $request->input('department');
        $product->save();

        return redirect('products');
    
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
        $department = Department::all();
        $product = Products::find($id);
            if(isset($product, $department)) {
                return view('editProduct', compact(['product', 'department']));
            }

        return redirect('products', compact(['product', 'department']));
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
        $product = Products::find($id);
            if(isset($product)){
                $product->name = $request->input('nameProduct');
                $product->stock = $request->input('stockProduct');
                $product->price = $request->input('priceProduct');
                $product->department_id = $request->input('department');
                
                $product->save();
            }

        return view('products', compact('product'));
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
