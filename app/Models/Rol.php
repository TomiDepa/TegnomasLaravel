<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rol extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rol';
    protected $fillable = ['nombre','id_permiso'];
    protected $attributes = [
        'id_permiso' => '1'
    ];

    /*RELACIONES*/
    public function user(): HasMany{
        return $this->hasMany(User::class, 'id_rol');
    }

    public function permiso(): BelongsToMany{
        return $this->belongsToMany(Permiso::class);
    }
}
