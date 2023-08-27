<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productPurchase extends Model
{
    use HasFactory;

    public $table = 'product_purchases';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'quantity',
        'price',
        'totalIva',
        'Subtotal',
        'porcentajeIva',
        'product_id',
        'purchase_id',
    ];
    protected $guarded = ['id'];

    //-- product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //purchase
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}




