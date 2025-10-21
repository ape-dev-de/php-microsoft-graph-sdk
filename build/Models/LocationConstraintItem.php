<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraintItem
 */
class LocationConstraintItem
{
    /**
     * If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user''s cache without checking if it''s free. Default is true.
     */
    private ?string $resolveAvailability;


    public function getResolveAvailability(): ?string
    {
        return $this->resolveAvailability;
    }

    public function setResolveAvailability(?string $resolveAvailability): self
    {
        $this->resolveAvailability = $resolveAvailability;
        return $this;
    }

}
