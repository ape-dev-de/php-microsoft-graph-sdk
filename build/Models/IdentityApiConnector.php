<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityApiConnector
 */
class IdentityApiConnector
{
    /**
     * The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
     */
    private ?string $authenticationConfiguration;

    /**
     * The name of the API connector.
     */
    private ?string $displayName;

    /**
     * The URL of the API endpoint to call.
     */
    private ?string $targetUrl;

    public function getAuthenticationConfiguration(): ?string
    {
        return $this->authenticationConfiguration;
    }

    public function setAuthenticationConfiguration(?string $authenticationConfiguration): self
    {
        $this->authenticationConfiguration = $authenticationConfiguration;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

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
