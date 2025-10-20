<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfiguration
 */
class ManagedDeviceMobileAppConfiguration
{
    /**
     * DateTime the object was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Admin provided description of the Device Configuration.
     */
    private ?string $description;

    /**
     * Admin provided name of the device configuration.
     */
    private ?string $displayName;

    /**
     * DateTime the object was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * the associated app.
     */
    private ?string $targetedMobileApps;

    /**
     * Version of the device configuration.
     */
    private ?float $version;

    /**
     * The list of group assignemenets for app configration.
     */
    private array $assignments = [];

    /**
     * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     */
    private array $deviceStatuses = [];

    /**
     * App configuration device status summary.
     */
    private ?string $deviceStatusSummary;

    /**
     * List of ManagedDeviceMobileAppConfigurationUserStatus.
     */
    private array $userStatuses = [];

    /**
     * An abstract class for Mobile app configuration for enrolled devices.
     */
    private ?string $userStatusSummary;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getTargetedMobileApps(): ?string
    {
        return $this->targetedMobileApps;
    }

    public function setTargetedMobileApps(?string $targetedMobileApps): self
    {
        $this->targetedMobileApps = $targetedMobileApps;
        return $this;
    }

    public function getVersion(): ?float
    {
        return $this->version;
    }

    public function setVersion(?float $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getAssignments(): array
    {
        return $this->assignments;
    }

    public function setAssignments(array $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

    public function getDeviceStatuses(): array
    {
        return $this->deviceStatuses;
    }

    public function setDeviceStatuses(array $deviceStatuses): self
    {
        $this->deviceStatuses = $deviceStatuses;
        return $this;
    }

    public function getDeviceStatusSummary(): ?string
    {
        return $this->deviceStatusSummary;
    }

    public function setDeviceStatusSummary(?string $deviceStatusSummary): self
    {
        $this->deviceStatusSummary = $deviceStatusSummary;
        return $this;
    }

    public function getUserStatuses(): array
    {
        return $this->userStatuses;
    }

    public function setUserStatuses(array $userStatuses): self
    {
        $this->userStatuses = $userStatuses;
        return $this;
    }

    public function getUserStatusSummary(): ?string
    {
        return $this->userStatusSummary;
    }

    public function setUserStatusSummary(?string $userStatusSummary): self
    {
        $this->userStatusSummary = $userStatusSummary;
        return $this;
    }

}
