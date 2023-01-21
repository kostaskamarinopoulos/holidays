<?php

use Illuminate\Database\Eloquent\Collection;

interface HolidayInterface
{
    public function transform(Holiday $holiday): Holiday;
}
