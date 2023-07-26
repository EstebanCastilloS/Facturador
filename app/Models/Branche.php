<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;

    public $table = 'branches';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name', 'nit','address','email','phone','contact','company_id','municipality_id'];
    protected $guarded = ['id'];


    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    //Una sucursal tiene una compañía

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    //AGREGADO
    //Un usuario pertenece a una sucursal

    // public function useers()
    // {
    //     return $this->hasMany(Useer::class);
    // }


}
