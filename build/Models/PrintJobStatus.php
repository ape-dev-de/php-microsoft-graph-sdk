<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJobStatus
 */
class PrintJobStatus
{
    /**
     * A human-readable description of the print job's current processing state. Read-only.
     */
    private ?string $description;

    /**
     * Additional details for print job state. Valid values are described in the following table. Read-only.
     */
    private array $details = [];

    /**
     * True if the job was acknowledged by a printer; false otherwise. Read-only.
     */
    private ?bool $isAcquiredByPrinter;

    /**
     */
    private ?string $state;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDetails(): array
    {
        return $this->details;
    }

    public function setDetails(array $details): self
    {
        $this->details = $details;
        return $this;
    }

    public function getIsAcquiredByPrinter(): ?bool
    {
        return $this->isAcquiredByPrinter;
    }

    public function setIsAcquiredByPrinter(?bool $isAcquiredByPrinter): self
    {
        $this->isAcquiredByPrinter = $isAcquiredByPrinter;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
