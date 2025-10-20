<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVendorInformation
 */
class SecurityVendorInformation
{
    /**
     * Specific provider (product/service - not vendor company); for example, WindowsDefenderATP.
     */
    private ?string $provider;

    /**
     * Version of the provider or subprovider, if it exists, that generated the alert. Required
     */
    private ?string $providerVersion;

    /**
     * Specific subprovider (under aggregating provider); for example, WindowsDefenderATP.SmartScreen.
     */
    private ?string $subProvider;

    /**
     * Name of the alert vendor (for example, Microsoft, Dell, FireEye). Required
     */
    private ?string $vendor;

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;
        return $this;
    }

    public function getProviderVersion(): ?string
    {
        return $this->providerVersion;
    }

    public function setProviderVersion(?string $providerVersion): self
    {
        $this->providerVersion = $providerVersion;
        return $this;
    }

    public function getSubProvider(): ?string
    {
        return $this->subProvider;
    }

    public function setSubProvider(?string $subProvider): self
    {
        $this->subProvider = $subProvider;
        return $this;
    }

    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;
        return $this;
    }

}
