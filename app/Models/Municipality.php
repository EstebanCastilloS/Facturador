<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public $table = 'municipalities';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name', 'code', 'department_id'];
    protected $guarded = ['id'];

    //Un municipio pertenece a un departamento
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    //Un departamento puede tener muchas compañias
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    //Una compañía tiene muchos municipios
    public function branches()
    {
        return $this->hasMany(Branche::class);
    }

    ///////////////////////////////////////////
    //Un proveedor pertenece ha muchos municipios
    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
}
