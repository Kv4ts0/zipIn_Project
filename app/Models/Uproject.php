<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uproject extends Model
{
    public $fillable = ['name', 'image1', 'image2', 'image3', 'image4', 'step1', 'step2', 'step3', 'step4', 'step5', 'description'];
    public $guarded = [];
}
