<?php

require_once 'HolidayInterface.php';

require_once '../app/Interfaces/Date/HolidayDateGenerator.php';


class HolidayDecorator implements HolidayInterface
{
    private $dateGenerator;

    public function __construct(
    ) {
        $this->dateGenerator = new HolidayDateGenerator();
    }

    public function transform(Holiday $holiday): Holiday
    {
        $holiday->createdAt = $this->dateSubmittedTransform($holiday->created_at);
        $holiday->dates = $this->datesRequestedTransform($holiday->request_start, $holiday->request_end);
        $holiday->days = $this->daysRequestedTransform($holiday->request_start, $holiday->request_end);
        $holiday->status = $this->statusTransform($holiday->status);

        return $holiday;
    }

    private function dateSubmittedTransform($createdAt): string 
    {        
        
        return $this->dateGenerator->generate($createdAt);
    }

    private function datesRequestedTransform($requestStart, $requestEnd): string 
    {
        return $requestStart.' to '.$requestEnd;
    }

    private function daysRequestedTransform($requestStart, $requestEnd): int 
    {
        $start=date_create($requestStart);
        $end=date_create($requestEnd);

        return (date_diff($start,$end)->days) + 1;
    }

    private function statusTransform($status): string 
    {
        if($status === -1) {
            return 'Rejected';
        } else if($status === 1) {
            return 'Approved';
        }

        return 'Pending';
    }
}
