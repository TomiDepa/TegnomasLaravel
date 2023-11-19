<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /*RELACIONES*/
    public function rol(): BelongsToMany{
        return $this->belongsToMany(Rol::class);
    }
}