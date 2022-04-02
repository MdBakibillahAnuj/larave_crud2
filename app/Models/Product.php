<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static $product;
    public static $image;
    public static $imageName;
    public static $directory;
    public static $imageUrl;

    public static function SaveData($request)
    {
        self::$image = $request->file('image');
        self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/img/product-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$product = new Product();
        self::$product->product_name = $request->product_name;
        self::$product->category = $request->category;
        self::$product->brand = $request->brand;
        self::$product->price = $request->price;
        self::$product->image = self::$imageUrl;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->save();
    }
    public static function updateData($request)
    {
        self::$product = Product::findOrfail($request->product_id);

        self::$image = $request->file('image');
        if (self::$image)
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageName = time().rand(10, 1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/img/product-image/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory. self::$imageName;
        }
        else {
            self::$imageUrl = self::$product->image;
        }
        self::$product->product_name = $request->product_name;
        self::$product->category = $request->category;
        self::$product->brand = $request->brand;
        self::$product->price = $request->price;
        self::$product->image = self::$imageUrl;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->save();
    }

}
