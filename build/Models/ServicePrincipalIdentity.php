<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServicePrincipalIdentity
 */
class ServicePrincipalIdentity
{
    /**
     * The application identifier of the service principal.
     */
    private ?string $appId;

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

}
