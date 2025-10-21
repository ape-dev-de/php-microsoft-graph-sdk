<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SocialIdentityProvider
 */
class SocialIdentityProvider
{
    /**
     * The identifier for the client application obtained when registering the application with the identity provider. Required.
     */
    private ?string $clientId;

    /**
     * The client secret for the application that is obtained when the application is registered with the identity provider. This is write-only. A read operation returns . Required.
     */
    private ?string $clientSecret;

    /**
     * For a B2B scenario, possible values: Google, Facebook. For a B2C scenario, possible values: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat. Required.
     */
    private ?string $identityProviderType;


    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(?string $clientSecret): self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    public function getIdentityProviderType(): ?string
    {
        return $this->identityProviderType;
    }

    public function setIdentityProviderType(?string $identityProviderType): self
    {
        $this->identityProviderType = $identityProviderType;
        return $this;
    }

}
