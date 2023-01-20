<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Holiday extends Eloquent
{
    // public $request_start;

    // public $request_end;

    protected $fillable = ['user_id', 'request_start', 'request_end'];
}