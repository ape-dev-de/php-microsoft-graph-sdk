<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessScheduleInstance
 */
class PrivilegedAccessScheduleInstance
{
    /**
     * When the schedule instance ends. Required.
     */
    private ?\DateTimeInterface $endDateTime;

    /**
     * When this instance starts. Required.
     */
    private ?\DateTimeInterface $startDateTime;


    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?\DateTimeInterface $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
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

}
