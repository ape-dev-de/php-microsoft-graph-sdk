<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupHistory
 */
class UserExperienceAnalyticsDeviceStartupHistory
{
    /**
     * The device core boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $coreBootTimeInMs;

    /**
     * The device core login time in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $coreLoginTimeInMs;

    /**
     * The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $deviceId;

    /**
     * The impact of device feature updates on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $featureUpdateBootTimeInMs;

    /**
     * The impact of device group policy client on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $groupPolicyBootTimeInMs;

    /**
     * The impact of device group policy client on login time in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $groupPolicyLoginTimeInMs;

    /**
     * When TRUE, indicates the device boot record is associated with feature updates. When FALSE, indicates the device boot record is not associated with feature updates. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $isFeatureUpdate;

    /**
     * When TRUE, indicates the device login is the first login after a reboot. When FALSE, indicates the device login is not the first login after a reboot. Supports: $select, $OrderBy. Read-only.
     */
    private ?bool $isFirstLogin;

    /**
     * The user experience analytics device boot record''s operating system version. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $operatingSystemVersion;

    /**
     * The time for desktop to become responsive during login process in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $responsiveDesktopTimeInMs;

    /**
     */
    private ?string $restartCategory;

    /**
     * OS restart fault bucket. The fault bucket is used to find additional information about a system crash. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $restartFaultBucket;

    /**
     * OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $restartStopCode;

    /**
     * The device boot start time. The value cannot be modified and is automatically populated when the device performs a reboot. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: ''2022-01-01T00:00:00Z''. Returned by default. Read-only.
     */
    private ?\DateTimeInterface $startTime;

    /**
     * The device total boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     */
    private ?float $totalBootTimeInMs;

    /**
     * The user experience analytics device startup history entity contains device boot performance history details.
     */
    private ?string $totalLoginTimeInMs;


    public function getCoreBootTimeInMs(): ?float
    {
        return $this->coreBootTimeInMs;
    }

    public function setCoreBootTimeInMs(?float $coreBootTimeInMs): self
    {
        $this->coreBootTimeInMs = $coreBootTimeInMs;
        return $this;
    }

    public function getCoreLoginTimeInMs(): ?float
    {
        return $this->coreLoginTimeInMs;
    }

    public function setCoreLoginTimeInMs(?float $coreLoginTimeInMs): self
    {
        $this->coreLoginTimeInMs = $coreLoginTimeInMs;
        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getFeatureUpdateBootTimeInMs(): ?float
    {
        return $this->featureUpdateBootTimeInMs;
    }

    public function setFeatureUpdateBootTimeInMs(?float $featureUpdateBootTimeInMs): self
    {
        $this->featureUpdateBootTimeInMs = $featureUpdateBootTimeInMs;
        return $this;
    }

    public function getGroupPolicyBootTimeInMs(): ?float
    {
        return $this->groupPolicyBootTimeInMs;
    }

    public function setGroupPolicyBootTimeInMs(?float $groupPolicyBootTimeInMs): self
    {
        $this->groupPolicyBootTimeInMs = $groupPolicyBootTimeInMs;
        return $this;
    }

    public function getGroupPolicyLoginTimeInMs(): ?float
    {
        return $this->groupPolicyLoginTimeInMs;
    }

    public function setGroupPolicyLoginTimeInMs(?float $groupPolicyLoginTimeInMs): self
    {
        $this->groupPolicyLoginTimeInMs = $groupPolicyLoginTimeInMs;
        return $this;
    }

    public function getIsFeatureUpdate(): ?bool
    {
        return $this->isFeatureUpdate;
    }

    public function setIsFeatureUpdate(?bool $isFeatureUpdate): self
    {
        $this->isFeatureUpdate = $isFeatureUpdate;
        return $this;
    }

    public function getIsFirstLogin(): ?bool
    {
        return $this->isFirstLogin;
    }

    public function setIsFirstLogin(?bool $isFirstLogin): self
    {
        $this->isFirstLogin = $isFirstLogin;
        return $this;
    }

    public function getOperatingSystemVersion(): ?string
    {
        return $this->operatingSystemVersion;
    }

    public function setOperatingSystemVersion(?string $operatingSystemVersion): self
    {
        $this->operatingSystemVersion = $operatingSystemVersion;
        return $this;
    }

    public function getResponsiveDesktopTimeInMs(): ?float
    {
        return $this->responsiveDesktopTimeInMs;
    }

    public function setResponsiveDesktopTimeInMs(?float $responsiveDesktopTimeInMs): self
    {
        $this->responsiveDesktopTimeInMs = $responsiveDesktopTimeInMs;
        return $this;
    }

    public function getRestartCategory(): ?string
    {
        return $this->restartCategory;
    }

    public function setRestartCategory(?string $restartCategory): self
    {
        $this->restartCategory = $restartCategory;
        return $this;
    }

    public function getRestartFaultBucket(): ?string
    {
        return $this->restartFaultBucket;
    }

    public function setRestartFaultBucket(?string $restartFaultBucket): self
    {
        $this->restartFaultBucket = $restartFaultBucket;
        return $this;
    }

    public function getRestartStopCode(): ?string
    {
        return $this->restartStopCode;
    }

    public function setRestartStopCode(?string $restartStopCode): self
    {
        $this->restartStopCode = $restartStopCode;
        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getTotalBootTimeInMs(): ?float
    {
        return $this->totalBootTimeInMs;
    }

    public function setTotalBootTimeInMs(?float $totalBootTimeInMs): self
    {
        $this->totalBootTimeInMs = $totalBootTimeInMs;
        return $this;
    }

    public function getTotalLoginTimeInMs(): ?string
    {
        return $this->totalLoginTimeInMs;
    }

    public function setTotalLoginTimeInMs(?string $totalLoginTimeInMs): self
    {
        $this->totalLoginTimeInMs = $totalLoginTimeInMs;
        return $this;
    }

}
