<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Usager;

class Departement extends Model
{
    use HasFactory;

    public function usager(): HasMany
    {
        return $this->hasMany(Usager::class);
    }


}
