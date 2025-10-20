<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupProcessPerformance
 */
class UserExperienceAnalyticsDeviceStartupProcessPerformance
{
    /**
     * The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only.
     */
    private ?float $deviceCount;

    /**
     * The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only.
     */
    private ?float $medianImpactInMs;

    /**
     * The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $processName;

    /**
     * The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $productName;

    /**
     * The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $publisher;

    /**
     * The user experience analytics device startup process performance.
     */
    private ?string $totalImpactInMs;

    public function getDeviceCount(): ?float
    {
        return $this->deviceCount;
    }

    public function setDeviceCount(?float $deviceCount): self
    {
        $this->deviceCount = $deviceCount;
        return $this;
    }

    public function getMedianImpactInMs(): ?float
    {
        return $this->medianImpactInMs;
    }

    public function setMedianImpactInMs(?float $medianImpactInMs): self
    {
        $this->medianImpactInMs = $medianImpactInMs;
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

    public function getTotalImpactInMs(): ?string
    {
        return $this->totalImpactInMs;
    }

    public function setTotalImpactInMs(?string $totalImpactInMs): self
    {
        $this->totalImpactInMs = $totalImpactInMs;
        return $this;
    }

}
