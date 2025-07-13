<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            if (Storage::exists('public/img/barang/' . $product->image)) {
                // Storage::delete('public/img/barang/' . $product->image);
                Storage::move('public/img/barang/' . $product->image, 'public/img/barang/deleted/' . $product->image);
            }
        });
    }
}
