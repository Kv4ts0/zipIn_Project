<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $fillable = ['name', 'blogimage', 'description'];
    public $guarded = [];
}
