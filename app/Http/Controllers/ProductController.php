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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::paginate(4);
        return view('products.addproduct', [
            'books' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'book_img' => 'required',
            'title' =>  'required',
            'description'  => 'required',
            'price'  => 'required',
            'discount_price'  => '',
        ]);
        $sku = 'UY7374';
        $author = 'Bishop Kunle Amoo';

        $product = Product::create([
            'book_img' => $request->book_img,
            'SKU'  => $sku,
            'title' =>  $request->title,
            'description'  => $request->description,
            'price'  => $request->price,
            'author'  => $author,
            'discount_price'  => $request->discount_price,
        ]);

        if(!$product){
            return back()->with('status', 'Unable to add book.');
        } else {
            return back()->with('success', 'Book added successfully.');
            // return redirect()->route('addproduct');
        }

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
        //
    }
}
