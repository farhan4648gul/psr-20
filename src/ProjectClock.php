<?php 

namespace App; 

use Psr\Clock\ClockInterface; 
use App\CustomClockInterface; 
use Carbon\Carbon; 

final class ProjectClock implements CustomClockInterface {

    private $clock; 

    /*     * The constructor accepts a ClockInterface instance, which can be Carbon or any other implementation.
     * This allows for dependency injection and makes the class more testable. 
     * 
     * @param ClockInterface $clock 
     */
    public function __construct() { 
        $this->clock = new Carbon(); // instantiate Carbon 
        // $this->clock = $clock; 
    }  

    public function now(): \DateTimeImmutable {
        return $this->clock->now()->toImmutable(); // return current time as DateTimeImmutable
    } 

    public function subtractTime(int $hours): \DateTimeImmutable {
        // This method should return a DateTimeImmutable object representing the current time minus some duration.
        // For demonstration purposes, let's assume it returns the current time minus one hour. 

        // if ( $this->clock instanceof Carbon) { 

            // issues here: 
            // introducing instaceof Carbon, increases the coupling of the code, 
            // introducing instanceof CustomClockInterface, also increases unneeded complexity / type-checking at runtime, 
            // how to avoid this? The issue is that if DIP is used and the parent ClockInterface is passed to the constructor,
            // then the method subtractTime() is highlighted by the IDE as unavailable in the ClockInterface, however, if 
            // I pass the CustomClockInterface, then the IDE is happy, though the DIP principle is violated... :D :D :D 
            // anybody... give me a hint for this... :P :P :P 
            return $this->clock->now()->subHours($hours)->toImmutable(); 
        // }
    }

}