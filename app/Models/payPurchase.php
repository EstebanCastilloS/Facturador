<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payPurchase extends Model
{
    use HasFactory;

    public $table = 'pay_purchases';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'pay_pp',
        'balance',
        'purchase_id',
        'user_id',

    ];
    protected $guarded = ['id'];

    public function pay()
    {
        return $this->belongsTo(Pay::class);
    }

    //Purchase
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }


    // paymentmethodPaypurchases
    public function paymentmethodPaypurchases()
    {
        return $this->hasMany(paymentmethodPaypurchase::class);
    }

     //user
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}

