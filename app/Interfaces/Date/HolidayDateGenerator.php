<?php

require_once 'DateGeneratorInterface.php';

class HolidayDateGenerator implements DateGeneratorInterface
{
    /**
     * DateGenerator constructor.
     */
    public function __construct(
        private string $format,
    ) {
        $this->format = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(string $date): string
    {
        return date($this->format, strtotime($date));
    }
}
