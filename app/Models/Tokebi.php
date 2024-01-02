<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tokebi extends Model
{
    public $fillable = ['name', 'location', 'image1', 'image2', 'image3', 'image4', 'price', 'description'];
    public $guarded = [];
}