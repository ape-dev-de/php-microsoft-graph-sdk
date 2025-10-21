<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendeeBase
 */
class AttendeeBase
{
    /**
     * The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type.
     */
    private ?string $type;


    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
