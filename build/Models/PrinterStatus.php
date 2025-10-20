<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterStatus
 */
class PrinterStatus
{
    /**
     * A human-readable description of the printer's current processing state. Read-only.
     */
    private ?string $description;

    /**
     * The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     */
    private array $details = [];

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
