<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nkosentence extends Model
{
    use HasFactory;
    protected $table = 'nkosentences';
    protected $fillable = ['sentence'];
}
