<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class skillset extends Model
{
    protected $table = 'skillsets';
    protected $skillset = ['description','image','link'];
}
