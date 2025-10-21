<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintServiceEndpoint
 */
class PrintServiceEndpoint
{
    /**
     * A human-readable display name for the endpoint.
     */
    private ?string $displayName;

    /**
     * The URI that can be used to access the service.
     */
    private ?string $uri;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

}
