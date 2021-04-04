<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilizer extends Model
{
    use HasFactory;

        protected $fillable = ['name', 'surname', 'email', 'image'];
        protected $table = 'utilizers';
}
