<?php

namespace Prospero\Dates;


class BirthDates
{
    private $birthDate;
    private $todayDate;

    public  function  __construct($birthDate)
    {
        $this->birthDate = $birthDate;
        $this->todayDate = date('Y-m-d');
    }

    public function findTotalDays() {
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);

        $totalsecs = $todayTime - $birthTime;
        $totalDays = floor($totalsecs / 3600 / 24);

        return $totalDays;
    }
}