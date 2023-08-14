<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $table = 'customers';

    protected $primaryKey = 'id';


    public $timestamps = True;

    protected $fillable = ['name', 'email', 'phone', 'status', 'municipality_id','company_id', 'identification_type_id'];
    protected $guarded = ['id'];

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


}
