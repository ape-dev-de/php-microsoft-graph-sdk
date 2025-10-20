<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserAgent
 */
class CallRecordsUserAgent
{
    /**
     * Identifies the version of application software used by this endpoint.
     */
    private ?string $applicationVersion;

    /**
     * User-agent header value reported by this endpoint.
     */
    private ?string $headerValue;

    public function getApplicationVersion(): ?string
    {
        return $this->applicationVersion;
    }

    public function setApplicationVersion(?string $applicationVersion): self
    {
        $this->applicationVersion = $applicationVersion;
        return $this;
    }

    public function getHeaderValue(): ?string
    {
        return $this->headerValue;
    }

    public function setHeaderValue(?string $headerValue): self
    {
        $this->headerValue = $headerValue;
        return $this;
    }

}
