<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frenchsentence extends Model
{
    use HasFactory;
    protected $table = 'frenchsentences';
    protected $fillable = ['sentence', 'new_text_field'];
}
