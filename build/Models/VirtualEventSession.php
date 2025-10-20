<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSession
 */
class VirtualEventSession
{
    /**
     * The virtual event session end time.
     */
    private ?string $endDateTime;

    /**
     * The virtual event session start time.
     */
    private ?string $startDateTime;

    /**
     * The URL of the video on demand (VOD) for Microsoft Teams events that allows webinar and town hall organizers to quickly publish and share event recordings.
     */
    private ?string $videoOnDemandWebUrl;

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getVideoOnDemandWebUrl(): ?string
    {
        return $this->videoOnDemandWebUrl;
    }

    public function setVideoOnDemandWebUrl(?string $videoOnDemandWebUrl): self
    {
        $this->videoOnDemandWebUrl = $videoOnDemandWebUrl;
        return $this;
    }

}
