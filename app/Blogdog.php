<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogdog extends Model
{
    //
    protected $table = 'blogdogs';
    public $primaryKey = 'id';
    public $timestamps = true;
}

