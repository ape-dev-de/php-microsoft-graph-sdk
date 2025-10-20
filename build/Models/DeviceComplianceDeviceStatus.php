<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceDeviceStatus
 */
class DeviceComplianceDeviceStatus
{
    /**
     * The DateTime when device compliance grace period expires
     */
    private ?\DateTimeInterface $complianceGracePeriodExpirationDateTime;

    /**
     * Device name of the DevicePolicyStatus.
     */
    private ?string $deviceDisplayName;

    /**
     * The device model that is being reported
     */
    private ?string $deviceModel;

    /**
     * Last modified date time of the policy report.
     */
    private ?\DateTimeInterface $lastReportedDateTime;

    /**
     */
    private ?string $status;

    /**
     * The User Name that is being reported
     */
    private ?string $userName;

    /**
     * UserPrincipalName.
     */
    private ?string $userPrincipalName;

    public function getComplianceGracePeriodExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    public function setComplianceGracePeriodExpirationDateTime(?\DateTimeInterface $complianceGracePeriodExpirationDateTime): self
    {
        $this->complianceGracePeriodExpirationDateTime = $complianceGracePeriodExpirationDateTime;
        return $this;
    }

    public function getDeviceDisplayName(): ?string
    {
        return $this->deviceDisplayName;
    }

    public function setDeviceDisplayName(?string $deviceDisplayName): self
    {
        $this->deviceDisplayName = $deviceDisplayName;
        return $this;
    }

    public function getDeviceModel(): ?string
    {
        return $this->deviceModel;
    }

    public function setDeviceModel(?string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;
        return $this;
    }

    public function getLastReportedDateTime(): ?\DateTimeInterface
    {
        return $this->lastReportedDateTime;
    }

    public function setLastReportedDateTime(?\DateTimeInterface $lastReportedDateTime): self
    {
        $this->lastReportedDateTime = $lastReportedDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
