<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudLogonRequestEvidence
 */
class SecurityCloudLogonRequestEvidence
{
    /**
     * The unique identifier for the sign-in request.
     */
    private ?string $requestId;

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

}
