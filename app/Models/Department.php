<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $table = 'departments';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name','dane_code', 'iso_code'];
    protected $guarded = ['id'];

    //Un departamento tiene muchos municipios
    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
}
