<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FederalEntity;
use App\Models\Settlement;

class Municipality extends Model
{
    use HasFactory;
    protected $fillable = ['key','name','federal_entity'];

    public function municipalities()
    {
        return $this->belongsTo(FederalEntity::class);
    }

    public function settlements()
    {
        return $this->hasMany(Settlement::class);
    }
}
