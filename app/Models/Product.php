<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'name',
        'price_purchase',
        'price_invoice',
        'stock',
        'status',
        'category_id'
    ];
    protected $guarded = ['id'];

    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // -- productPurchases
    public function productPurchases()
    {
        return $this->hasMany(productPurchase::class);
    }
}

