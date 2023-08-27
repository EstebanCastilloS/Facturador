<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentMethod extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'code',

    ];

    public $timestamps = True;

    protected $guarded = ['id'];

    //methodpaymentPaypurchase BORRAR
    public function methodpayPaypurchases()
    {
        return $this->hasMany(methodpaymentPaypurchase::class);
    }

    //methodpaymentPaypurchase
    public function paymentmethodPaypurchases()
    {
        return $this->hasMany(paymentmethodPaypurchase::class);
    }
}
