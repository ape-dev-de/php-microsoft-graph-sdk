<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeOffReason
 */
class TimeOffReason
{
    /**
     * The code of the timeOffReason to represent an external identifier. This field must be unique within the team in Microsoft Teams and uses an alphanumeric format, with a maximum of 100 characters.
     */
    private ?string $code;

    /**
     * The name of the timeOffReason. Required.
     */
    private ?string $displayName;

    /**
     * Supported icon types are: none, car, calendar, running, plane, firstAid, doctor, notWorking, clock, juryDuty, globe, cup, phone, weather, umbrella, piggyBank, dog, cake, trafficCone, pin, sunny. Required.
     */
    private ?string $iconType;

    /**
     * Indicates whether the timeOffReason can be used when creating new entities or updating existing ones. Required.
     */
    private ?string $isActive;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIconType(): ?string
    {
        return $this->iconType;
    }

    public function setIconType(?string $iconType): self
    {
        $this->iconType = $iconType;
        return $this;
    }

    public function getIsActive(): ?string
    {
        return $this->isActive;
    }

    public function setIsActive(?string $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }

}
