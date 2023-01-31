<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Faker\Guesser\Name;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Pagination\Paginator;
use Image, File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $requests)
    {
        // dump($requests->name);


        $products = DB::table("products");

        if($requests->name) {
            $products = $products
                ->where('name', 'like', '%' .$requests->name. '%');
        }


        if($requests->price) {
            $products = $products
                ->where('price', $requests->price);
        }

        if(($requests->status == 1 || $requests->status == 0) && isset($requests->status)) {
            $products = $products
                ->where('status', $requests->status);
        }



        $data['product'] = $products->get();

        // dd($products);
        $data['filter_products'] = DB::table('products')->get();

        $data['filter_product'] = DB::table('products')->get();

        // dump($request->all());

        return view('products.index', $data)
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {


        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'password' => 'required',
            'price' => 'required',
            // 'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required',
            'details' => 'required',

        ]);
        //  dd($product);
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product->delete();


        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function shop()
    {
        $data['products'] = DB::table('products')->get();
        // dd('test');

        return view('shops.index', $data);
    }


}
