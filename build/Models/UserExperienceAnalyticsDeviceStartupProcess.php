<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupProcess
 */
class UserExperienceAnalyticsDeviceStartupProcess
{
    /**
     * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $managedDeviceId;

    /**
     * The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $processName;

    /**
     * The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $productName;

    /**
     * The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $publisher;

    /**
     * The user experience analytics device startup process details.
     */
    private ?string $startupImpactInMs;

    public function getManagedDeviceId(): ?string
    {
        return $this->managedDeviceId;
    }

    public function setManagedDeviceId(?string $managedDeviceId): self
    {
        $this->managedDeviceId = $managedDeviceId;
        return $this;
    }

    public function getProcessName(): ?string
    {
        return $this->processName;
    }

    public function setProcessName(?string $processName): self
    {
        $this->processName = $processName;
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

    public function getPublisher(): ?string
    {
        return $this->publisher;
    }

    public function setPublisher(?string $publisher): self
    {
        $this->publisher = $publisher;
        return $this;
    }

    public function getStartupImpactInMs(): ?string
    {
        return $this->startupImpactInMs;
    }

    public function setStartupImpactInMs(?string $startupImpactInMs): self
    {
        $this->startupImpactInMs = $startupImpactInMs;
        return $this;
    }

}
