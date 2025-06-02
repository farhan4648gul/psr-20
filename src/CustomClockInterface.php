<?php 

namespace App;

use Psr\Clock\ClockInterface; 

interface CustomClockInterface extends ClockInterface { 

    // public function now(): \DateTimeImmutable; 
    /**
     * Subtracts a specified number of hours from the current time.
     */
    public function subtractTime(int $hours): \DateTimeImmutable; 
}