<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    use HasFactory;

    public $table = 'identification_types';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name','code'];
    protected $guarded = ['id'];

    //Un tipo de identificacion tiene muchos proveedores
    public function providers()
    {
        return $this->hasMany(Provider::class);
    }
}
