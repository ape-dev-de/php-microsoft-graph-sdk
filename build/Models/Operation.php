<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Operation
 */
class Operation
{
    /**
     * The start time of the operation.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The time of the last action of the operation.
     */
    private ?\DateTimeInterface $lastActionDateTime;

    /**
     * The current status of the operation: notStarted, running, completed, failed
     */
    private ?string $status;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getLastActionDateTime(): ?\DateTimeInterface
    {
        return $this->lastActionDateTime;
    }

    public function setLastActionDateTime(?\DateTimeInterface $lastActionDateTime): self
    {
        $this->lastActionDateTime = $lastActionDateTime;
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
