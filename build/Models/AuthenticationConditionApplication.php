<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditionApplication
 */
class AuthenticationConditionApplication
{
    /**
     * The identifier for an application corresponding to a condition which will trigger an authenticationEventListener.
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
