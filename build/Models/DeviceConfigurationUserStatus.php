<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationUserStatus
 */
class DeviceConfigurationUserStatus
{
    /**
     * Devices count for that user.
     */
    private ?float $devicesCount;

    /**
     * Last modified date time of the policy report.
     */
    private ?\DateTimeInterface $lastReportedDateTime;

    /**
     */
    private ?string $status;

    /**
     * User name of the DevicePolicyStatus.
     */
    private ?string $userDisplayName;

    /**
     * UserPrincipalName.
     */
    private ?string $userPrincipalName;

    public function getDevicesCount(): ?float
    {
        return $this->devicesCount;
    }

    public function setDevicesCount(?float $devicesCount): self
    {
        $this->devicesCount = $devicesCount;
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

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
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
