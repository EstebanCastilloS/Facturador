<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentmethodPaypurchase extends Model
{
    use HasFactory;

    public $table = 'paymentmethod_paypurchases';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'pay',
        'balance',
        'pay_purchase_id',
        'payment_method_id',
        'card_id',
        'bank_id',
        'bank_id',
        'pyment_form_id',


    ];
    protected $guarded = ['id'];

    //payPurchases
    public function payPurchase()
    {
        return $this->belongsTo(payPurchase::class);
    }

    //paymentMethod
    public function paymentMethod()
    {
        return $this->belongsTo(paymentMethod::class);
    }

    //card
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    //bank
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    //pymentForm
    public function pymentForm()
    {
        return $this->belongsTo(PymentForm::class);
    }


}
