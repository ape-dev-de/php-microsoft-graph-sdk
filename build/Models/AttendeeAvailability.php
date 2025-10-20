<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeAvailability
 */
class AttendeeAvailability
{
    /**
     * The email address and type of attendee - whether it''s a person or a resource, and whether required or optional if it''s a person.
     */
    private ?string $attendee;

    /**
     * The availability status of the attendee. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     */
    private ?string $availability;

    public function getAttendee(): ?string
    {
        return $this->attendee;
    }

    public function setAttendee(?string $attendee): self
    {
        $this->attendee = $attendee;
        return $this;
    }

    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    public function setAvailability(?string $availability): self
    {
        $this->availability = $availability;
        return $this;
    }

}
