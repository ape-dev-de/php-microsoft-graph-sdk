<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProvider
 */
class IdentityProvider
{
    /**
     * The client ID for the application. This is the client ID obtained when registering the application with the identity provider. Required. Not nullable.
     */
    private ?string $clientId;

    /**
     * The client secret for the application. This is the client secret obtained when registering the application with the identity provider. This is write-only. A read operation will return .  Required. Not nullable.
     */
    private ?string $clientSecret;

    /**
     * The display name of the identity provider. Not nullable.
     */
    private ?string $name;

    /**
     * The identity provider type is a required field. For B2B scenario: Google, Facebook. For B2C scenario: Microsoft, Google, Amazon, LinkedIn, Facebook, GitHub, Twitter, Weibo, QQ, WeChat, OpenIDConnect. Not nullable.
     */
    private ?string $type;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
