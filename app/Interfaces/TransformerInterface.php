<?php

use Illuminate\Database\Eloquent\Collection;

interface TransformerInterface
{
    public function transform(Collection $holiday): Collection;
}
