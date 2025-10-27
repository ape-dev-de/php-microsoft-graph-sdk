<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfiguration
 */
class ManagedDeviceMobileAppConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Admin provided description of the Device Configuration. */
    public ?string $description = null;

    /** Admin provided name of the device configuration. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * the associated app.
     * @var string[]
     */
    public array $targetedMobileApps = [];

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The list of group assignemenets for app configration.
     * @var ManagedDeviceMobileAppConfigurationAssignment[]
     */
    public array $assignments = [];

    /** 
     * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @var ManagedDeviceMobileAppConfigurationDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * App configuration device status summary.
     * @var ManagedDeviceMobileAppConfigurationDeviceSummary|\stdClass|null
     */
    public ManagedDeviceMobileAppConfigurationDeviceSummary|\stdClass|null $deviceStatusSummary = null;

    /** 
     * List of ManagedDeviceMobileAppConfigurationUserStatus.
     * @var ManagedDeviceMobileAppConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * App configuration user status summary.
     * @var ManagedDeviceMobileAppConfigurationUserSummary|\stdClass|null
     */
    public ManagedDeviceMobileAppConfigurationUserSummary|\stdClass|null $userStatusSummary = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['targetedMobileApps'])) {
            $this->targetedMobileApps = $data['targetedMobileApps'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusSummary'])) {
            $this->deviceStatusSummary = is_array($data['deviceStatusSummary']) ? new ManagedDeviceMobileAppConfigurationDeviceSummary($data['deviceStatusSummary']) : $data['deviceStatusSummary'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusSummary'])) {
            $this->userStatusSummary = is_array($data['userStatusSummary']) ? new ManagedDeviceMobileAppConfigurationUserSummary($data['userStatusSummary']) : $data['userStatusSummary'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
