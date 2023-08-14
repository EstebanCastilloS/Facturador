<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public $table = 'purchases';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'generation_date',
        'due_date',
        'subtotal',
        'iva',
        'total',
        'pay',
        'balance',
        'retetion',
        'status',
        'provider_id',
        'branche_id',
        'percentage_id',
        'user_id',
    ];
    protected $guarded = ['id'];

    //conexión
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    //Conexión Branche
    public function branche()
    {
        return $this->belongsTo(Branche::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

