<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIpAddress
 */
class SecurityIpAddress
{
    /**
     * The details about the autonomous system to which this IP address belongs.
     */
    private ?string $autonomousSystem;

    /**
     * The country/region for this IP address.
     */
    private ?string $countryOrRegion;

    /**
     * The hosting company listed for this host.
     */
    private ?string $hostingProvider;

    /**
     * The block of IP addresses this IP address belongs to.
     */
    private ?string $netblock;


    public function getAutonomousSystem(): ?string
    {
        return $this->autonomousSystem;
    }

    public function setAutonomousSystem(?string $autonomousSystem): self
    {
        $this->autonomousSystem = $autonomousSystem;
        return $this;
    }

    public function getCountryOrRegion(): ?string
    {
        return $this->countryOrRegion;
    }

    public function setCountryOrRegion(?string $countryOrRegion): self
    {
        $this->countryOrRegion = $countryOrRegion;
        return $this;
    }

    public function getHostingProvider(): ?string
    {
        return $this->hostingProvider;
    }

    public function setHostingProvider(?string $hostingProvider): self
    {
        $this->hostingProvider = $hostingProvider;
        return $this;
    }

    public function getNetblock(): ?string
    {
        return $this->netblock;
    }

    public function setNetblock(?string $netblock): self
    {
        $this->netblock = $netblock;
        return $this;
    }

}
