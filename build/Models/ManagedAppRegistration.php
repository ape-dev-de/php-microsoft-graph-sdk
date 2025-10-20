<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppRegistration
 */
class ManagedAppRegistration
{
    /**
     * The app package Identifier
     */
    private ?string $appIdentifier;

    /**
     * App version
     */
    private ?string $applicationVersion;

    /**
     * Date and time of creation
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Host device name
     */
    private ?string $deviceName;

    /**
     * App management SDK generated tag, which helps relate apps hosted on the same device. Not guaranteed to relate apps in all conditions.
     */
    private ?string $deviceTag;

    /**
     * Host device type
     */
    private ?string $deviceType;

    /**
     * Zero or more reasons an app registration is flagged. E.g. app running on rooted device
     */
    private array $flaggedReasons = [];

    /**
     * Date and time of last the app synced with management service.
     */
    private ?\DateTimeInterface $lastSyncDateTime;

    /**
     * App management SDK version
     */
    private ?string $managementSdkVersion;

    /**
     * Operating System version
     */
    private ?string $platformVersion;

    /**
     * The user Id to who this app registration belongs.
     */
    private ?string $userId;

    /**
     * Version of the entity.
     */
    private ?string $version;

    /**
     * Zero or more policys already applied on the registered app when it last synchronized with managment service.
     */
    private array $appliedPolicies = [];

    /**
     * Zero or more policies admin intended for the app as of now.
     */
    private array $intendedPolicies = [];

    /**
     * The ManagedAppEntity is the base entity type for all other entity types under app management workflow.
     */
    private ?string $operations;

    public function getAppIdentifier(): ?string
    {
        return $this->appIdentifier;
    }

    public function setAppIdentifier(?string $appIdentifier): self
    {
        $this->appIdentifier = $appIdentifier;
        return $this;
    }

    public function getApplicationVersion(): ?string
    {
        return $this->applicationVersion;
    }

    public function setApplicationVersion(?string $applicationVersion): self
    {
        $this->applicationVersion = $applicationVersion;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getDeviceTag(): ?string
    {
        return $this->deviceTag;
    }

    public function setDeviceTag(?string $deviceTag): self
    {
        $this->deviceTag = $deviceTag;
        return $this;
    }

    public function getDeviceType(): ?string
    {
        return $this->deviceType;
    }

    public function setDeviceType(?string $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    public function getFlaggedReasons(): array
    {
        return $this->flaggedReasons;
    }

    public function setFlaggedReasons(array $flaggedReasons): self
    {
        $this->flaggedReasons = $flaggedReasons;
        return $this;
    }

    public function getLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->lastSyncDateTime;
    }

    public function setLastSyncDateTime(?\DateTimeInterface $lastSyncDateTime): self
    {
        $this->lastSyncDateTime = $lastSyncDateTime;
        return $this;
    }

    public function getManagementSdkVersion(): ?string
    {
        return $this->managementSdkVersion;
    }

    public function setManagementSdkVersion(?string $managementSdkVersion): self
    {
        $this->managementSdkVersion = $managementSdkVersion;
        return $this;
    }

    public function getPlatformVersion(): ?string
    {
        return $this->platformVersion;
    }

    public function setPlatformVersion(?string $platformVersion): self
    {
        $this->platformVersion = $platformVersion;
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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getAppliedPolicies(): array
    {
        return $this->appliedPolicies;
    }

    public function setAppliedPolicies(array $appliedPolicies): self
    {
        $this->appliedPolicies = $appliedPolicies;
        return $this;
    }

    public function getIntendedPolicies(): array
    {
        return $this->intendedPolicies;
    }

    public function setIntendedPolicies(array $intendedPolicies): self
    {
        $this->intendedPolicies = $intendedPolicies;
        return $this;
    }

    public function getOperations(): ?string
    {
        return $this->operations;
    }

    public function setOperations(?string $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

}
