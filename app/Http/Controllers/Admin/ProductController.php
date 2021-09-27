<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('layouts.admin.modules.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('layouts.admin.modules.product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        //Check Status
        if ($request->status == config('common.status.on')) {
            $status = config('common.status.active');
        } else {
            $status = config('common.status.deactive');
        }
        //Check Thumbnail
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $nameFile = uniqid() . '-' . $file->getClientOriginalName();
            $file->storeAs('products/thumbnail/', $nameFile, 'public');
            $linkThumb = 'storage/products/thumbnail/'.$nameFile;
        }
        //Check Gallery
        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery');
            $arrFile = [];
            foreach ($files as $key => $file) {
                $nameFileGallery = uniqid() . '-' . $file->getClientOriginalName();
                $file->storeAs('products/gallery/', $nameFileGallery, 'public');
                $linkFileGallery = 'storage/products/gallery/'.$nameFileGallery;
                $arrFile = array_merge($arrFile, ["i".$key => $linkFileGallery]);
            }
            $jsonFileGallery = json_encode($arrFile);
        } else {
            $jsonFileGallery = null;
        }
        //Request data
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'quantity' => $request->quantity,
            'size' => $request->size,
            'thumbnail' => $linkThumb,
            'gallery' => $jsonFileGallery,
            'category_id' => $request->category_id,
            'status' => $status,
        ];
        Product::create($data);

        return redirect()->route('admin.product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $galleris = json_decode($product->gallery);

        return view('layouts.admin.modules.product.edit', compact('product', 'categories', 'galleris'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::find($id);
        //Status
        if ($request->status == config('common.status.on')) {
            $status = config('common.status.active');
        } else {
            $status = config('common.status.deactive');
        }
        //Thumbnail
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $nameFile = uniqid() . '-' . $file->getClientOriginalName();
            $file->storeAs('products/thumbnail/', $nameFile, 'public');
            $linkThumb = 'storage/products/thumbnail/'.$nameFile;
        } else {
            $linkThumb = $product->thumbnail;
        }
        //Gallery
        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery');
            $arrFile = [];
            foreach ($files as $key => $file) {
                $nameFileGallery = uniqid() . '-' . $file->getClientOriginalName();
                $file->storeAs('products/gallery/', $nameFileGallery, 'public');
                $linkFileGallery = 'storage/products/gallery/'.$nameFileGallery;
                $arrFile = array_merge($arrFile, ["i".$key => $linkFileGallery]);
            }
            $jsonFileGallery = json_encode($arrFile);
        } else {
            $jsonFileGallery = $product->gallery;
        }
        //Request data
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'quantity' => $request->quantity,
            'size' => $request->size,
            'thumbnail' => $linkThumb,
            'gallery' => $jsonFileGallery,
            'category_id' => $request->category_id,
            'status' => $status,
        ];
        $product->update($data);

        return redirect()->route('admin.product.index');
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();

        return redirect()->route('admin.product.index');
    }
}
