<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfiguration
 */
class DeviceConfiguration
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
     * Version of the device configuration.
     */
    private ?float $version;

    /**
     * The list of assignments for the device configuration profile.
     */
    private array $assignments = [];

    /**
     * Device Configuration Setting State Device Summary
     */
    private array $deviceSettingStateSummaries = [];

    /**
     * Device configuration installation status by device.
     */
    private array $deviceStatuses = [];

    /**
     * Device Configuration devices status overview
     */
    private ?string $deviceStatusOverview;

    /**
     * Device configuration installation status by user.
     */
    private array $userStatuses = [];

    /**
     * Device Configuration.
     */
    private ?string $userStatusOverview;

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

    public function getDeviceSettingStateSummaries(): array
    {
        return $this->deviceSettingStateSummaries;
    }

    public function setDeviceSettingStateSummaries(array $deviceSettingStateSummaries): self
    {
        $this->deviceSettingStateSummaries = $deviceSettingStateSummaries;
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

    public function getDeviceStatusOverview(): ?string
    {
        return $this->deviceStatusOverview;
    }

    public function setDeviceStatusOverview(?string $deviceStatusOverview): self
    {
        $this->deviceStatusOverview = $deviceStatusOverview;
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

    public function getUserStatusOverview(): ?string
    {
        return $this->userStatusOverview;
    }

    public function setUserStatusOverview(?string $userStatusOverview): self
    {
        $this->userStatusOverview = $userStatusOverview;
        return $this;
    }

}
