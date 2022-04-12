<?php
 
namespace App\Http\Controllers\API;
 
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductRecource;
use App\Models\Product;
use App\Http\Resource\ProductCollection;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::scopeStatus(Product::AVAILABLE)->get();
    
        return new ProductCollection($products);
    }
     
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $productRequest)
    {
    
        $product = Product::create(ProductRequest->all());
     
        return new ProductRecource($product);
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    } 
     
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $productRequest, Product $product)
    {
        

        $user = Auth::user();


        if (!$user->can('view', $product)) {
            echo 'Not Authorized.';
          }

    
        $product->update($productRequest->all());
    
        return new ProductRecource($product);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return response()->json('success','Product deleted successfully');
    }
    
}