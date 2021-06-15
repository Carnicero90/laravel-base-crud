<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['series', 'title', 'number', 'description', 'pages', 'price', 'release_date', 'pic'];
}
