<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentTroubleshootingEvent
 */
class EnrollmentTroubleshootingEvent
{
    /**
     * Azure AD device identifier.
     */
    private ?string $deviceId;

    /**
     */
    private ?string $enrollmentType;

    /**
     */
    private ?string $failureCategory;

    /**
     * Detailed failure reason.
     */
    private ?string $failureReason;

    /**
     * Device identifier created or collected by Intune.
     */
    private ?string $managedDeviceIdentifier;

    /**
     * Operating System.
     */
    private ?string $operatingSystem;

    /**
     * OS Version.
     */
    private ?string $osVersion;

    /**
     * Event representing an enrollment failure.
     */
    private ?string $userId;

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getEnrollmentType(): ?string
    {
        return $this->enrollmentType;
    }

    public function setEnrollmentType(?string $enrollmentType): self
    {
        $this->enrollmentType = $enrollmentType;
        return $this;
    }

    public function getFailureCategory(): ?string
    {
        return $this->failureCategory;
    }

    public function setFailureCategory(?string $failureCategory): self
    {
        $this->failureCategory = $failureCategory;
        return $this;
    }

    public function getFailureReason(): ?string
    {
        return $this->failureReason;
    }

    public function setFailureReason(?string $failureReason): self
    {
        $this->failureReason = $failureReason;
        return $this;
    }

    public function getManagedDeviceIdentifier(): ?string
    {
        return $this->managedDeviceIdentifier;
    }

    public function setManagedDeviceIdentifier(?string $managedDeviceIdentifier): self
    {
        $this->managedDeviceIdentifier = $managedDeviceIdentifier;
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

    public function getOsVersion(): ?string
    {
        return $this->osVersion;
    }

    public function setOsVersion(?string $osVersion): self
    {
        $this->osVersion = $osVersion;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
