<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use App\Department;


class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::all();
        return view('products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();
        return view('newProduct', compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameProduct' => 'required',
            'stockProduct' => 'required',
            'priceProduct' => 'required',
            'department' => 'required'
        ]);

        $product = new Products;
        $product->name = $request->input('nameProduct');
        $product->stock = $request->input('stockProduct');
        $product->price = $request->input('priceProduct');
        $product->department_id = $request->input('department');
        $product->save();

        return redirect('products');
    
    }

    /**
     * Show the form for editing the specified resource.
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
                return redirect('/products');
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Products::find($id);
            if(isset($product)) {
                $product->delete();
                
                return redirect('/products');
            }

    }


}