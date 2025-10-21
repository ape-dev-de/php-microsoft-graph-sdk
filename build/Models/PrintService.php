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
     * @var string[]
     */
    private array $endpoints = [];


    /**
     * @return string[]
     */
    public function getEndpoints(): array
    {
        return $this->endpoints;
    }

    /**
     * @param string[] $endpoints
     */
    public function setEndpoints(array $endpoints): self
    {
        $this->endpoints = $endpoints;
        return $this;
    }

}
