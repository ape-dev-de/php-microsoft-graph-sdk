<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsEndpoint
 */
class CallRecordsEndpoint
{
    /**
     * User-agent reported by this endpoint.
     */
    private ?string $userAgent;


    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;
        return $this;
    }

}
