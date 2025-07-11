<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = $request->input('size', 12);
        $search = $request->input('q');
        $sort = $request->input('orderby', 'created_at');

        $query = Product::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        switch ($sort) {
            case 'date_new_to_old':
                $query->orderBy('created_at', 'desc');
                break;
            case 'date_old_to_new':
                $query->orderBy('created_at', 'asc');
                break;
            case 'price_low_to_high':
                $query->orderBy('regular_price', 'asc');
                break;
            case 'price_high_to_low':
                $query->orderBy('regular_price', 'desc');
                break;
            default:
                // Default sorting (bisa disesuaikan)
                $query->orderBy('created_at', 'desc');
                break;
        }

        $products = $query->with('category')->paginate($pageSize);

        $products->appends($request->query());

        return view('shop', [
            'products' => $products,
            'pageSize' => $pageSize,
            'search' => $search,
            'sort' => $sort,
        ]);
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $rproducts = Product::where('slug', '!=', $slug)->inRandomOrder('id')->get()->take(8);
        return view('product-detail', [
            'product' => $product,
            'rproducts' => $rproducts,
        ]);
    }

    public function checkout()
    {
        return view('checkout');
    }
}
