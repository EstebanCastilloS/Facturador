<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useer extends Model
{
    use HasFactory;
    public $table = 'useers';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name', 'email', 'user_role','address','status'];
    protected $guarded = ['id'];

    //AGREGADO
    //Una sucursal tiene muchos usuarios
    // public function branche()
    // {
    //     return $this->belongsTo(Branche::class);
    // }
}
