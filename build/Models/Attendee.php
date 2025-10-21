<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Attendee
 */
class Attendee
{
    /**
     * An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn''t proposed another time, then this property isn''t included in a response of a GET event.
     */
    private ?string $proposedNewTime;

    /**
     * The attendee''s response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
     */
    private ?string $status;


    public function getProposedNewTime(): ?string
    {
        return $this->proposedNewTime;
    }

    public function setProposedNewTime(?string $proposedNewTime): self
    {
        $this->proposedNewTime = $proposedNewTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
