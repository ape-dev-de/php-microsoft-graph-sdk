<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectionInfo
 */
class ConnectionInfo
{
    /**
     * The endpoint that is used by Entitlement Management to communicate with the access package resource.
     */
    private ?string $url;


    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
