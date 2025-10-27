<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSGeneralDeviceConfiguration
 */
class MacOSGeneralDeviceConfiguration
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

    /** Version of the device configuration. */
    public ?float $version = null;

    /** 
     * The list of assignments for the device configuration profile.
     * @var DeviceConfigurationAssignment[]
     */
    public array $assignments = [];

    /** 
     * Device Configuration Setting State Device Summary
     * @var SettingStateDeviceSummary[]
     */
    public array $deviceSettingStateSummaries = [];

    /** 
     * Device configuration installation status by device.
     * @var DeviceConfigurationDeviceStatus[]
     */
    public array $deviceStatuses = [];

    /** 
     * Device Configuration devices status overview
     * @var DeviceConfigurationDeviceOverview|\stdClass|null
     */
    public DeviceConfigurationDeviceOverview|\stdClass|null $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public DeviceConfigurationUserOverview|\stdClass|null $userStatusOverview = null;

    /**  */
    public ?AppListType $compliantAppListType = null;

    /** 
     * List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @var AppListItem[]
     */
    public array $compliantAppsList = [];

    /** 
     * An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @var string[]
     */
    public array $emailInDomainSuffixes = [];

    /** Block simple passwords. */
    public ?bool $passwordBlockSimple = null;

    /** Number of days before the password expires. */
    public ?float $passwordExpirationDays = null;

    /** Number of character sets a password must contain. Valid values 0 to 4 */
    public ?float $passwordMinimumCharacterSetCount = null;

    /** Minimum length of passwords. */
    public ?float $passwordMinimumLength = null;

    /** Minutes of inactivity required before a password is required. */
    public ?float $passwordMinutesOfInactivityBeforeLock = null;

    /** Minutes of inactivity required before the screen times out. */
    public ?float $passwordMinutesOfInactivityBeforeScreenTimeout = null;

    /** Number of previous passwords to block. */
    public ?float $passwordPreviousPasswordBlockCount = null;

    /** Whether or not to require a password. */
    public ?bool $passwordRequired = null;

    /**  */
    public ?RequiredPasswordType $passwordRequiredType = null;


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
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deviceSettingStateSummaries'])) {
            $this->deviceSettingStateSummaries = $data['deviceSettingStateSummaries'];
        }
        if (isset($data['deviceStatuses'])) {
            $this->deviceStatuses = $data['deviceStatuses'];
        }
        if (isset($data['deviceStatusOverview'])) {
            $this->deviceStatusOverview = is_array($data['deviceStatusOverview']) ? new DeviceConfigurationDeviceOverview($data['deviceStatusOverview']) : $data['deviceStatusOverview'];
        }
        if (isset($data['userStatuses'])) {
            $this->userStatuses = $data['userStatuses'];
        }
        if (isset($data['userStatusOverview'])) {
            $this->userStatusOverview = is_array($data['userStatusOverview']) ? new DeviceConfigurationUserOverview($data['userStatusOverview']) : $data['userStatusOverview'];
        }
        if (isset($data['compliantAppListType'])) {
            $this->compliantAppListType = is_array($data['compliantAppListType']) ? new AppListType($data['compliantAppListType']) : $data['compliantAppListType'];
        }
        if (isset($data['compliantAppsList'])) {
            $this->compliantAppsList = $data['compliantAppsList'];
        }
        if (isset($data['emailInDomainSuffixes'])) {
            $this->emailInDomainSuffixes = $data['emailInDomainSuffixes'];
        }
        if (isset($data['passwordBlockSimple'])) {
            $this->passwordBlockSimple = $data['passwordBlockSimple'];
        }
        if (isset($data['passwordExpirationDays'])) {
            $this->passwordExpirationDays = $data['passwordExpirationDays'];
        }
        if (isset($data['passwordMinimumCharacterSetCount'])) {
            $this->passwordMinimumCharacterSetCount = $data['passwordMinimumCharacterSetCount'];
        }
        if (isset($data['passwordMinimumLength'])) {
            $this->passwordMinimumLength = $data['passwordMinimumLength'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeLock'])) {
            $this->passwordMinutesOfInactivityBeforeLock = $data['passwordMinutesOfInactivityBeforeLock'];
        }
        if (isset($data['passwordMinutesOfInactivityBeforeScreenTimeout'])) {
            $this->passwordMinutesOfInactivityBeforeScreenTimeout = $data['passwordMinutesOfInactivityBeforeScreenTimeout'];
        }
        if (isset($data['passwordPreviousPasswordBlockCount'])) {
            $this->passwordPreviousPasswordBlockCount = $data['passwordPreviousPasswordBlockCount'];
        }
        if (isset($data['passwordRequired'])) {
            $this->passwordRequired = $data['passwordRequired'];
        }
        if (isset($data['passwordRequiredType'])) {
            $this->passwordRequiredType = is_array($data['passwordRequiredType']) ? new RequiredPasswordType($data['passwordRequiredType']) : $data['passwordRequiredType'];
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
