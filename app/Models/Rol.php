<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /*RELACIONES*/
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function permiso(): BelongsToMany{
        return $this->belongsToMany(Permiso::class);
    }
}
