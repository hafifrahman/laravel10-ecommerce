<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255|unique:products,name',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->hashName();
            $file->storeAs('img/product', $fileName, 'public');
        }

        $validated['image'] = $fileName ?? null;
        $validated['slug'] = Str::slug($request->name);

        Product::create($validated);

        return redirect('/admin/product')->with('success', 'Berhasil menambah product.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = $product->image;
        if ($request->hasFile('image')) {
            if ($fileName) {
                Storage::delete('public/img/product/' . $fileName);
            }

            $file = $request->file('image');
            $fileName = $file->hashName();
            $file->storeAs('img/product', $fileName, 'public');
        }

        $validated['image'] = $fileName;
        $validated['slug'] = Str::slug($request->name);
        $validated['stock'] = $validated['quantity'] < 1 ? 'kosong' : 'ada';

        $product->update($validated);

        return redirect('/admin/product')->with('success', 'Berhasil mengubah product.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/product')->with('success', 'Berhasil menghapus product.');
    }
}
