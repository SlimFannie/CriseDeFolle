<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Formulaire;
use Departement;
use Session;

class Usager extends Authenticatable
{

    protected $fillable = ['matricule', 'motdepasse'];

    public function departement(): HasOne
    {
        return $this->hasOne(Departement::class);
    }

    public function formulaires()
    {
        return $this->belongsToMany(Formulaire::class, 'formulaire_usager', 'usager_id', 'formulaire_id');
    }

    use HasFactory;
}
