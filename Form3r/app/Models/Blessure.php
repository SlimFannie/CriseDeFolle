<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Formulaire;

class Blessure extends Model
{
    use HasFactory;

    public function formulaire(): BelongsToMany
    {
        return $this->belongsToMany(Formulaire::class);
    }
}
