<?php

require_once 'DateGeneratorInterface.php';

class HolidayDateGenerator implements DateGeneratorInterface
{
    /**
     * DateGenerator constructor.
     */
    public function __construct(
        private string $format = 'd-m-Y',
    ) {
        $this->format = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(string $date): string
    {
        // var_dump($date);
        // var_dump(date($this->format, strtotime($date)));
        return date($this->format, strtotime($date));
    }
}
