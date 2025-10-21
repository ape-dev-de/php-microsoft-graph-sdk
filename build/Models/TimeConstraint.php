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
     * @var string[]
     */
    private array $timeSlots = [];


    public function getActivityDomain(): ?string
    {
        return $this->activityDomain;
    }

    public function setActivityDomain(?string $activityDomain): self
    {
        $this->activityDomain = $activityDomain;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTimeSlots(): array
    {
        return $this->timeSlots;
    }

    /**
     * @param string[] $timeSlots
     */
    public function setTimeSlots(array $timeSlots): self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }

}
