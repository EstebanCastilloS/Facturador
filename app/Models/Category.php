<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    use HasFactory;
    public $table = 'categories';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name','description','iva','utility'];
    protected $guarded = ['id'];
}
