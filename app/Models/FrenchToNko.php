<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrenchToNko extends Model
{
    use HasFactory;
    protected $fillable = ['frenchSentence', 'nkoSentence'];
}
