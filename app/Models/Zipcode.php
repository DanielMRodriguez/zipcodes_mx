<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FederalEntity;
use App\Models\Municipality;
use App\Models\Settlement;

class Zipcode extends Model
{
    use HasFactory;
    protected $fillable = ['locality','zip_code','federal_entity','municipality'];

    public function federal_ent()
    {
        return $this->belongsTo(FederalEntity::class,"federal_entity", "id");
    }

    public function munici()
    {
        return $this->belongsTo(Municipality::class,"municipality", "id");
    }

    public function settlements()
    {
        return $this->hasMany(Settlement::class,"zip_code","id");
    }
}
