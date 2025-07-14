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
            $deletedPath = 'public/img/product/deleted';
            $files = Storage::files($deletedPath);
            $maxFiles = 100;
            if (count($files) >= $maxFiles) {
                usort($files, function($a, $b) {
                    return Storage::lastModified($a) <=> Storage::lastModified($b);
                });

                Storage::delete($files[0]);
            }
            if (Storage::exists('public/img/product/' . $product->image)) {
                Storage::move('public/img/product/' . $product->image, $deletedPath . '/' . $product->image);
            }
        });
    }
}
