<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audio extends Model
{
    use HasFactory;
    protected $table = 'audio';
    protected $fillable = [
        'audio_data',
        'texte_saisi',
    ];

}
