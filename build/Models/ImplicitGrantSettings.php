<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImplicitGrantSettings
 */
class ImplicitGrantSettings
{
    /**
     * Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow.
     */
    private ?bool $enableAccessTokenIssuance;

    /**
     * Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow.
     */
    private ?string $enableIdTokenIssuance;

    public function getEnableAccessTokenIssuance(): ?bool
    {
        return $this->enableAccessTokenIssuance;
    }

    public function setEnableAccessTokenIssuance(?bool $enableAccessTokenIssuance): self
    {
        $this->enableAccessTokenIssuance = $enableAccessTokenIssuance;
        return $this;
    }

    public function getEnableIdTokenIssuance(): ?string
    {
        return $this->enableIdTokenIssuance;
    }

    public function setEnableIdTokenIssuance(?string $enableIdTokenIssuance): self
    {
        $this->enableIdTokenIssuance = $enableIdTokenIssuance;
        return $this;
    }

}
