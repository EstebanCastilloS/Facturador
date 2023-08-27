<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PymentForm extends Model
{
    use HasFactory;

    public $table = 'pyment_forms';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'name',
        'code',

    ];
    protected $guarded = ['id'];

    //paymentmethodPaypurchases
    public function paymentmethodPaypurchases()
    {
        return $this->hasMany(paymentmethodPaypurchase::class);
    }
}
