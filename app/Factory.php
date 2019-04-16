<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $table = 'factory';
    protected $primaryKey ="f_id";
    public $timestamps =false;
}
