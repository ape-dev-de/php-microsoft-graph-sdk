<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeConstraint
 */
class TimeConstraint
{
    /**
     * The nature of the activity, optional. The possible values are: work, personal, unrestricted, or unknown.
     */
    private ?string $activityDomain;

    /**
     */
    private ?string $timeSlots;

    public function getActivityDomain(): ?string
    {
        return $this->activityDomain;
    }

    public function setActivityDomain(?string $activityDomain): self
    {
        $this->activityDomain = $activityDomain;
        return $this;
    }

    public function getTimeSlots(): ?string
    {
        return $this->timeSlots;
    }

    public function setTimeSlots(?string $timeSlots): self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }

}
