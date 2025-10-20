<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraint
 */
class LocationConstraint
{
    /**
     * The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes won''t return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations.
     */
    private ?bool $isRequired;

    /**
     * Constraint information for one or more locations that the client requests for the meeting.
     */
    private array $locations = [];

    /**
     * The client requests the service to suggest one or more meeting locations.
     */
    private ?string $suggestLocation;

    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    public function setIsRequired(?bool $isRequired): self
    {
        $this->isRequired = $isRequired;
        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setLocations(array $locations): self
    {
        $this->locations = $locations;
        return $this;
    }

    public function getSuggestLocation(): ?string
    {
        return $this->suggestLocation;
    }

    public function setSuggestLocation(?string $suggestLocation): self
    {
        $this->suggestLocation = $suggestLocation;
        return $this;
    }

}
