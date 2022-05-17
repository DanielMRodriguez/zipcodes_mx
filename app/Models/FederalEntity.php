<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zipcode;
use App\Models\Municipality;

class FederalEntity extends Model
{
    use HasFactory;

    protected $fillable = ['name','code','key'];

    public function zip_codes()
    {
        return $this->hasMany(Zipcode::class);
    }

    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
}
