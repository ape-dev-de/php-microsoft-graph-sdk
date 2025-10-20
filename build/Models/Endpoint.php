<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Endpoint
 */
class Endpoint
{
    /**
     */
    private ?string $capability;

    /**
     */
    private ?string $providerId;

    /**
     */
    private ?string $providerName;

    /**
     */
    private ?string $providerResourceId;

    /**
     */
    private ?string $uri;

    public function getCapability(): ?string
    {
        return $this->capability;
    }

    public function setCapability(?string $capability): self
    {
        $this->capability = $capability;
        return $this;
    }

    public function getProviderId(): ?string
    {
        return $this->providerId;
    }

    public function setProviderId(?string $providerId): self
    {
        $this->providerId = $providerId;
        return $this;
    }

    public function getProviderName(): ?string
    {
        return $this->providerName;
    }

    public function setProviderName(?string $providerName): self
    {
        $this->providerName = $providerName;
        return $this;
    }

    public function getProviderResourceId(): ?string
    {
        return $this->providerResourceId;
    }

    public function setProviderResourceId(?string $providerResourceId): self
    {
        $this->providerResourceId = $providerResourceId;
        return $this;
    }

    public function getUri(): ?string
    {
        return $this->uri;
    }

    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

}
