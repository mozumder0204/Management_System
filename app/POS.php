<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POS extends Model
{
    protected $table = 'POS';
    protected $primaryKey ="pos_id";
    public $timestamps =false;
}
