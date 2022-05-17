<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipality;

class Settlement extends Model
{
    use HasFactory;
    protected $fillable = ['key','name','federal_entity',"zip_code"];
    
    public function municipalities()
    {
        return $this->belongsTo(Municipality::class);
    }
}
