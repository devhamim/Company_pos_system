<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ShopProduct;
use App\Models\shopproductgallery;
use Illuminate\Http\Request;
use Str;

class ShopProductController extends Controller
{
    //shop_product_list
    function shop_product_list(){
        $shopproducts = ShopProduct::where('status', 1)->get();
        return view('backend.shopproduct.list',[
            'shopproducts'=>$shopproducts,
        ]);
    }

    // shop_product_add
    function shop_product_add(){
        $categories = Category::where('status', 1)->get();
        return view('backend.shopproduct.add',[
            'categories'=>$categories,
        ]);
    }

    // shop_product_store
    function shop_product_store(Request $request){
        $rules = [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'discount' => '',
            'sku' => '',
            'tags' => 'required',
            'sort_description' => 'required',
            'description' => 'required',
            'preview_image' => 'required',
        ];

        $validatedData = $request->validate($rules);

        // Generate slug
        $validatedData['slug'] = Str::random(5) . rand(100000, 999999);

        // Calculate after_discount
        $total_discount = $request->price * ($request->discount / 100);
        $validatedData['after_discount'] = $request->price - $total_discount;

        if ($request->hasFile('preview_image')) {
            $image = $request->file('preview_image');
            $extension = $image->getClientOriginalExtension();
            $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/shop'), $fileName);
            $validatedData['preview_image'] = $fileName;
        }

        $ShopProduct = ShopProduct::create($validatedData);

        if ($request->hasFile('gallery_image')) {
            $galleryImages = $request->file('gallery_image');
            foreach ($galleryImages as $galleryImage) {
                $extension = $galleryImage->getClientOriginalExtension();
                $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
                $galleryImage->move(public_path('uploads/shop/gallery'), $fileName);

                shopproductgallery::create([
                    'shopproduct_id' => $ShopProduct->id,
                    'gallery_image' => $fileName,
                    'created_at' => now(),
                ]);
            }
        }

        return redirect()->route('shop.product.list')->withSuccess('added successfully.');
    }
}
