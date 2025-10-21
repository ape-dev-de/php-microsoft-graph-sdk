<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestSchedule
 */
class RequestSchedule
{
    /**
     * When the eligible or active assignment expires.
     */
    private ?string $expiration;

    /**
     * The frequency of the  eligible or active assignment. This property is currently unsupported in PIM.
     */
    private ?string $recurrence;

    /**
     * When the  eligible or active assignment becomes active.
     */
    private ?\DateTimeInterface $startDateTime;


    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    public function setExpiration(?string $expiration): self
    {
        $this->expiration = $expiration;
        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
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
