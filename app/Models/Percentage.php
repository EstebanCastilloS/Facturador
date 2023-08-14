<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Percentage extends Model
{
    use HasFactory;

    public $table = 'percentages';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable =
    [
        'value_percentage',
        'comments',

    ];
    protected $guarded = ['id'];

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
