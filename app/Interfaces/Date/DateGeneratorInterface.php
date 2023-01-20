<?php

interface DateGeneratorInterface
{
    /**
     * @param string $date
     * @return string
     */
    public function generate(string $date);
}
