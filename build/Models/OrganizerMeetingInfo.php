<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrganizerMeetingInfo
 */
class OrganizerMeetingInfo
{
    /**
     */
    private ?string $organizer;


    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }

    public function setOrganizer(?string $organizer): self
    {
        $this->organizer = $organizer;
        return $this;
    }

}
