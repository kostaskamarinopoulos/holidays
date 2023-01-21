<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Holiday extends Eloquent
{
    protected $fillable = ['user_id', 'request_start', 'request_end'];
}