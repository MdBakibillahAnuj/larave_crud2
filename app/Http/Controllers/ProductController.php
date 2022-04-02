<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function addProduct()
    {
        return view('admin.home.add');
    }
    public function manageProduct()
    {
        return view('admin.home.manage', [
            'products' => Product::all(),
        ]);
    }
    public function newProduct(Request $request)
    {
        Product::SaveData($request);
        return redirect()->back()->with('message', 'Product added successfully');
    }
    public function deleteProduct($id)
    {
        $product = Product::findOrfail($id);
        if (file_exists($product->image))
        {
            unlink($product->image);
        }
        $product->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }
    public function productStatus($id)
    {
        $product = Product::findOrfail($id);
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();
        return redirect()->back()->with('message', 'Status changed successfully');
    }
    public function productEdit($id)
    {
        return view('admin.home.edit', [
           'product' => Product::findOrfail($id),
        ]);
    }
    public function UpdateProduct(Request $request)
    {
        Product::updateData($request);
        return redirect('/manage-product')->with('message', 'Product update successfully.');
    }
}
