<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footballer extends Model
{
    protected $fillable = ['footballername', 'club', 'country'];
}
