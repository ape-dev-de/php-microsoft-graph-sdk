<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessageResponse
 */
class EventMessageResponse
{
    /**
     * An alternate date/time proposed by an invitee for a meeting request to start and end. Read-only. Not filterable.
     */
    private ?string $proposedNewTime;

    /**
     * Specifies the type of response to a meeting request. Possible values are: tentativelyAccepted, accepted, declined. For the eventMessageResponse type, none, organizer, and notResponded are not supported. Read-only. Not filterable.
     */
    private ?string $responseType;

    public function getProposedNewTime(): ?string
    {
        return $this->proposedNewTime;
    }

    public function setProposedNewTime(?string $proposedNewTime): self
    {
        $this->proposedNewTime = $proposedNewTime;
        return $this;
    }

    public function getResponseType(): ?string
    {
        return $this->responseType;
    }

    public function setResponseType(?string $responseType): self
    {
        $this->responseType = $responseType;
        return $this;
    }

}
