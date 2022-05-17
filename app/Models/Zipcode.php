<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FederalEntity;
use App\Models\Municipality;

class Zipcode extends Model
{
    use HasFactory;
    protected $fillable = ['locality','zip_code','federal_entity','municipality'];

    public function federal_entity()
    {
        return $this->belongsTo(FederalEntity::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
