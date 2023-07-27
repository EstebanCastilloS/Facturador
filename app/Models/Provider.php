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

    protected $fillable = ['identification', 'name', 'address', 'email', 'phone', 'status', 'municipality_id'];
    protected $guarded = ['id'];

    //Un proveedor pertenece a un municipio
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
