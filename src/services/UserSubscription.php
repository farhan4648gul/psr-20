<?php 

namespace App\Services; 

use App\ProjectClock; 

class UserSubscription { 

    public function __construct(public ProjectClock $clock)
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
        
        // Check if the current time is before the subscription end date
        return $this->clock->subtractTime(-10) < $subscriptionEndDate; 
    }
}