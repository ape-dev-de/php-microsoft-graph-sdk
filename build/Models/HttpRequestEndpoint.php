<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HttpRequestEndpoint
 */
class HttpRequestEndpoint
{
    /**
     * The HTTP endpoint that a custom extension calls.
     */
    private ?string $targetUrl;


    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    public function setTargetUrl(?string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

}
