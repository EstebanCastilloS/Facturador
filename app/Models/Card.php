<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public $table = 'cards';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'name',

    ];
    protected $guarded = ['id'];

    //methodpaymentPaypurchase BORRAR
    public function methodpayPaypurchases()
    {
        return $this->hasMany(methodpaymentPaypurchase::class);
    }

    //paymentmethodPaypurchases
    public function paymentmethodPaypurchases()
    {
        return $this->hasMany(paymentmethodPaypurchase::class);
    }
}

