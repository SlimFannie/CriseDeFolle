<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Blessure;
use App\Models\Usager;

class Formulaire extends Model
{
    use HasFactory;
    
    public function blessures(): HasMany
    {
        return $this->hasMany(Blessure::class);
    }

    public function usagers()
    {
        return $this->belongsToMany(Usager::class, 'formulaire_usager', 'formulaire_id', 'usager_id');
    }

}
