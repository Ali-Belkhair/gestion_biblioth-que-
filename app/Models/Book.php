<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'pages', 'description', 'image', 'categorie_id'];
 
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class); 
    }
    
}
