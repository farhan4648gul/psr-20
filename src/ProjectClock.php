<?php 

namespace App; 

use App\CustomClockInterface; 
use Carbon\Carbon;

final class ProjectClock implements CustomClockInterface {

    private $clock; 

    public function __construct() {
        $this->clock = new Carbon(); // instantiate Carbon
    } 

    public function now(): \DateTimeImmutable {
        return $this->clock->now()->toImmutable(); // return current time as DateTimeImmutable
    } 

    public function subtractTime(int $hours): \DateTimeImmutable {
        // This method should return a DateTimeImmutable object representing the current time minus some duration.
        // For demonstration purposes, let's assume it returns the current time minus one hour.
        return $this->clock->now()->subHours($hours)->toImmutable(); 
    }

}