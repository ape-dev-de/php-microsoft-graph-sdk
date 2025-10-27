<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10SecureAssessmentConfiguration
 */
class Windows10SecureAssessmentConfiguration
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

    /** Indicates whether or not to allow the app from printing during the test. */
    public ?bool $allowPrinting = null;

    /** Indicates whether or not to allow screen capture capability during a test. */
    public ?bool $allowScreenCapture = null;

    /** Indicates whether or not to allow text suggestions during the test. */
    public ?bool $allowTextSuggestion = null;

    /** The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username). */
    public ?string $configurationAccount = null;

    /** Url link to an assessment that's automatically loaded when the secure assessment browser is launched. It has to be a valid Url (http[s]://msdn.microsoft.com/). */
    public ?string $launchUri = null;


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
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
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
        if (isset($data['allowPrinting'])) {
            $this->allowPrinting = is_bool($data['allowPrinting']) ? $data['allowPrinting'] : (bool)$data['allowPrinting'];
        }
        if (isset($data['allowScreenCapture'])) {
            $this->allowScreenCapture = is_bool($data['allowScreenCapture']) ? $data['allowScreenCapture'] : (bool)$data['allowScreenCapture'];
        }
        if (isset($data['allowTextSuggestion'])) {
            $this->allowTextSuggestion = is_bool($data['allowTextSuggestion']) ? $data['allowTextSuggestion'] : (bool)$data['allowTextSuggestion'];
        }
        if (isset($data['configurationAccount'])) {
            $this->configurationAccount = $data['configurationAccount'];
        }
        if (isset($data['launchUri'])) {
            $this->launchUri = $data['launchUri'];
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
