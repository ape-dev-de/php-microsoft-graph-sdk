<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleItem
 */
class ScheduleItem
{
    /**
     * The date, time, and time zone that the corresponding event ends.
     */
    private ?string $end;

    /**
     * The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional.
     */
    private ?bool $isPrivate;

    /**
     * The location where the corresponding event is held or attended from. Optional.
     */
    private ?string $location;

    /**
     * The date, time, and time zone that the corresponding event starts.
     */
    private ?string $start;

    /**
     * The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     */
    private ?string $status;

    /**
     * The corresponding event's subject line. Optional.
     */
    private ?string $subject;


    public function getEnd(): ?string
    {
        return $this->end;
    }

    public function setEnd(?string $end): self
    {
        $this->end = $end;
        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): self
    {
        $this->start = $start;
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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

}
