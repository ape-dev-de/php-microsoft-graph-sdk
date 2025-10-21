<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncementBase
 */
class ServiceAnnouncementBase
{
    /**
     * More details about service event. This property doesn't support filters.
     */
    private array $details = [];

    /**
     * The end time of the service event.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * The last modified time of the service event.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The start time of the service event.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The title of the service event.
     */
    private ?string $title;


    public function getDetails(): array
    {
        return $this->details;
    }

    public function setDetails(array $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
