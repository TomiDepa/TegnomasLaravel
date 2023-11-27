<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['id_categoria','titulo','descripcion', 'image_path'];
    protected $attributes = [
        'id_categoria' => '1'
    ];
    
    /*RELACIONES*/
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->hasMany(Categoria::class);
    }
    public function images(): HasMany { // Agrega esta relación
        return $this->hasMany(Image::class);
    }
}
