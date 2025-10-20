<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintService
 */
class PrintService
{
    /**
     * Endpoints that can be used to access the service. Read-only. Nullable.
     */
    private ?string $endpoints;

    public function getEndpoints(): ?string
    {
        return $this->endpoints;
    }

    public function setEndpoints(?string $endpoints): self
    {
        $this->endpoints = $endpoints;
        return $this;
    }

}
