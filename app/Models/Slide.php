<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public $fillable = ['title', 'subtitle', 'slideimage', 'description'];
    public $guarded = [];
}
