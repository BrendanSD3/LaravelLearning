<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.products');
        /* $products = \App\Product::all();

        return view('Admin.viewproducts', ['allProducts' => $products]); */
    }

    public function show()
    {
        $products = \App\Product::all();
        return view('products.viewproducts', ['allProducts' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
        public function store(Request $request) {
            \App\Product::create([
                
              'name' => $request->get('name'),
              'description' => $request->get('description'),
              'price' => $request->get('price'),
              'count' => $request->get('count'),
            ]);
            $products = \App\Product::all();
            return redirect()->route('products.index')->with('success','Product Added');
            //return redirect()->route('products.viewproducts', ['allProducts' => $products]);
            //return redirect()->route('products.show');
            
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /*  public function show($id)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Product::destroy($id);
  
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}
