<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsBaseline
 */
class UserExperienceAnalyticsBaseline
{
    /**
     * The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: ''2014-01-01T00:00:00Z''. Returned by default.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the baseline.
     */
    private ?string $displayName;

    /**
     * When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default.
     */
    private ?bool $isBuiltIn;

    /**
     * The scores and insights for the application health metrics.
     */
    private ?string $appHealthMetrics;

    /**
     * The scores and insights for the battery health metrics.
     */
    private ?string $batteryHealthMetrics;

    /**
     * The scores and insights for the best practices metrics.
     */
    private ?string $bestPracticesMetrics;

    /**
     * The scores and insights for the device boot performance metrics.
     */
    private ?string $deviceBootPerformanceMetrics;

    /**
     * The scores and insights for the reboot analytics metrics.
     */
    private ?string $rebootAnalyticsMetrics;

    /**
     * The scores and insights for the resource performance metrics.
     */
    private ?string $resourcePerformanceMetrics;

    /**
     * The user experience analytics baseline entity contains baseline values against which to compare the user experience analytics scores.
     */
    private ?string $workFromAnywhereMetrics;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getIsBuiltIn(): ?bool
    {
        return $this->isBuiltIn;
    }

    public function setIsBuiltIn(?bool $isBuiltIn): self
    {
        $this->isBuiltIn = $isBuiltIn;
        return $this;
    }

    public function getAppHealthMetrics(): ?string
    {
        return $this->appHealthMetrics;
    }

    public function setAppHealthMetrics(?string $appHealthMetrics): self
    {
        $this->appHealthMetrics = $appHealthMetrics;
        return $this;
    }

    public function getBatteryHealthMetrics(): ?string
    {
        return $this->batteryHealthMetrics;
    }

    public function setBatteryHealthMetrics(?string $batteryHealthMetrics): self
    {
        $this->batteryHealthMetrics = $batteryHealthMetrics;
        return $this;
    }

    public function getBestPracticesMetrics(): ?string
    {
        return $this->bestPracticesMetrics;
    }

    public function setBestPracticesMetrics(?string $bestPracticesMetrics): self
    {
        $this->bestPracticesMetrics = $bestPracticesMetrics;
        return $this;
    }

    public function getDeviceBootPerformanceMetrics(): ?string
    {
        return $this->deviceBootPerformanceMetrics;
    }

    public function setDeviceBootPerformanceMetrics(?string $deviceBootPerformanceMetrics): self
    {
        $this->deviceBootPerformanceMetrics = $deviceBootPerformanceMetrics;
        return $this;
    }

    public function getRebootAnalyticsMetrics(): ?string
    {
        return $this->rebootAnalyticsMetrics;
    }

    public function setRebootAnalyticsMetrics(?string $rebootAnalyticsMetrics): self
    {
        $this->rebootAnalyticsMetrics = $rebootAnalyticsMetrics;
        return $this;
    }

    public function getResourcePerformanceMetrics(): ?string
    {
        return $this->resourcePerformanceMetrics;
    }

    public function setResourcePerformanceMetrics(?string $resourcePerformanceMetrics): self
    {
        $this->resourcePerformanceMetrics = $resourcePerformanceMetrics;
        return $this;
    }

    public function getWorkFromAnywhereMetrics(): ?string
    {
        return $this->workFromAnywhereMetrics;
    }

    public function setWorkFromAnywhereMetrics(?string $workFromAnywhereMetrics): self
    {
        $this->workFromAnywhereMetrics = $workFromAnywhereMetrics;
        return $this;
    }

}
