<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintOperationStatus
 */
class PrintOperationStatus
{
    /**
     * A human-readable description of the printOperation's current processing state. Read-only.
     */
    private ?string $description;

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
