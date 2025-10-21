<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainState
 */
class DomainState
{
    /**
     * Timestamp for when the last activity occurred. The value is updated when an operation is scheduled, the asynchronous task starts, and when the operation completes.
     */
    private ?\DateTimeInterface $lastActionDateTime;

    /**
     * Type of asynchronous operation. The values can be ForceDelete or Verification.
     */
    private ?string $operation;

    /**
     * Current status of the operation.  Scheduled - Operation is scheduled but hasn't started.  InProgress - Task is in progress.  Failed - The operation failed.
     */
    private ?string $status;


    public function getLastActionDateTime(): ?\DateTimeInterface
    {
        return $this->lastActionDateTime;
    }

    public function setLastActionDateTime(?\DateTimeInterface $lastActionDateTime): self
    {
        $this->lastActionDateTime = $lastActionDateTime;
        return $this;
    }

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(?string $operation): self
    {
        $this->operation = $operation;
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
