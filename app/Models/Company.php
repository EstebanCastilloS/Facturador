<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $table = 'companies';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name', 'nit','dv','address','email','phone','contact','municipality_id'];
    protected $guarded = ['id'];

    //Una compañía puede estar en un minuicio
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    //preguntar por esto
    //Una compañía tiene muchos municipios
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    //Una compañía tiene muchas sucursales
    public function branches()
    {
        return $this->hasMany(Branche::class);
    }

    //Una compañía tiene muchos proveedores
    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
}
