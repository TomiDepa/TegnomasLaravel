<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    /*RELACIONES*/
    public function post(): BelongsToMany{
        return $this->belongsToMany(Post::class);
    }
}
