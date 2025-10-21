<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppMsiInformation
 */
class Win32LobAppMsiInformation
{
    /**
     */
    private ?string $packageType;

    /**
     * The MSI product code.
     */
    private ?string $productCode;

    /**
     * The MSI product name.
     */
    private ?string $productName;

    /**
     * The MSI product version.
     */
    private ?string $productVersion;

    /**
     * The MSI publisher.
     */
    private ?string $publisher;

    /**
     * Whether the MSI app requires the machine to reboot to complete installation.
     */
    private ?bool $requiresReboot;

    /**
     * Contains MSI app properties for a Win32 App.
     */
    private ?string $upgradeCode;


    public function getPackageType(): ?string
    {
        return $this->packageType;
    }

    public function setPackageType(?string $packageType): self
    {
        $this->packageType = $packageType;
        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    public function getProductVersion(): ?string
    {
        return $this->productVersion;
    }

    public function setProductVersion(?string $productVersion): self
    {
        $this->productVersion = $productVersion;
        return $this;
    }

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getRequiresReboot(): ?bool
    {
        return $this->requiresReboot;
    }

    public function setRequiresReboot(?bool $requiresReboot): self
    {
        $this->requiresReboot = $requiresReboot;
        return $this;
    }

    public function getUpgradeCode(): ?string
    {
        return $this->upgradeCode;
    }

    public function setUpgradeCode(?string $upgradeCode): self
    {
        $this->upgradeCode = $upgradeCode;
        return $this;
    }

}
