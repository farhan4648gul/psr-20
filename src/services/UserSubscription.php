<?php 

namespace App\Services; 


use Psr\Clock\ClockInterface; 
use App\CustomClockInterface; 

class UserSubscription { 

    public function __construct(public CustomClockInterface $clock)
    {
        
    }

    public function getSubscriptionEndDate(): \DateTimeImmutable
    {
        // This method should return the subscription end date.
        // For demonstration purposes, let's assume it returns a fixed date.
        return $this->clock->now(); // ('2024-12-31');
    } 

    public function isActive(): bool
    {
        // Assuming we have a method to get the subscription end date
        $subscriptionEndDate = $this->getSubscriptionEndDate();
        
        // if ( $this->clock instanceof ProjectClock)
        // Check if the current time is before the subscription end date
        return $this->clock->subtractTime(-10) < $subscriptionEndDate; 
    }
}