<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintConnector
 */
class PrintConnector
{
    /**
     * The connector's version.
     */
    private ?string $appVersion;

    /**
     * The name of the connector.
     */
    private ?string $displayName;

    /**
     * The connector machine's hostname.
     */
    private ?string $fullyQualifiedDomainName;

    /**
     * The physical and/or organizational location of the connector.
     */
    private ?string $location;

    /**
     * The connector machine's operating system version.
     */
    private ?string $operatingSystem;

    /**
     * The DateTimeOffset when the connector was registered.
     */
    private ?\DateTimeInterface $registeredDateTime;

    public function getAppVersion(): ?string
    {
        return $this->appVersion;
    }

    public function setAppVersion(?string $appVersion): self
    {
        $this->appVersion = $appVersion;
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

    public function getFullyQualifiedDomainName(): ?string
    {
        return $this->fullyQualifiedDomainName;
    }

    public function setFullyQualifiedDomainName(?string $fullyQualifiedDomainName): self
    {
        $this->fullyQualifiedDomainName = $fullyQualifiedDomainName;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getRegisteredDateTime(): ?\DateTimeInterface
    {
        return $this->registeredDateTime;
    }

    public function setRegisteredDateTime(?\DateTimeInterface $registeredDateTime): self
    {
        $this->registeredDateTime = $registeredDateTime;
        return $this;
    }

}
