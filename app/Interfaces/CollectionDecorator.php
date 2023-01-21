<?php

use Illuminate\Database\Eloquent\Collection;

require_once 'TransformerInterface.php';
require_once 'Holiday/HolidayDecorator.php';
require_once 'Holiday/HolidayInterface.php';

class CollectionDecorator implements TransformerInterface
{

    /**
     * CollectionDecorator constructor.
     */
    public function __construct(
        private HolidayInterface $transformer,
    ) {
        $this->transformer = $transformer;
    }

    public function transform(Collection $holidays): Collection
    {
        return $holidays->map(function (Holiday $holiday, $index) {
            return $this->transformer->transform($holiday);
        });
    }
}