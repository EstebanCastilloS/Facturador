<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    public $table = 'providers';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'identification',
        'name',
        'address',
        'email',
        'phone',
        'status',
        'municipality_id',
        'company_id',
        'identification_type_id'
    ];
    protected $guarded = ['id'];

    //Un proveedor pertenece a un municipio
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function identificationType()
    {
        return $this->belongsTo(IdentificationType::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
