<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10TeamGeneralConfiguration
 */
class Windows10TeamGeneralConfiguration
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
    public mixed $deviceStatusOverview = null;

    /** 
     * Device configuration installation status by user.
     * @var DeviceConfigurationUserStatus[]
     */
    public array $userStatuses = [];

    /** 
     * Device Configuration users status overview
     * @var DeviceConfigurationUserOverview|\stdClass|null
     */
    public mixed $userStatusOverview = null;

    /** Indicates whether or not to Block Azure Operational Insights. */
    public ?bool $azureOperationalInsightsBlockTelemetry = null;

    /** The Azure Operational Insights workspace id. */
    public ?string $azureOperationalInsightsWorkspaceId = null;

    /** The Azure Operational Insights Workspace key. */
    public ?string $azureOperationalInsightsWorkspaceKey = null;

    /** Specifies whether to automatically launch the Connect app whenever a projection is initiated. */
    public ?bool $connectAppBlockAutoLaunch = null;

    /** Indicates whether or not to Block setting a maintenance window for device updates. */
    public ?bool $maintenanceWindowBlocked = null;

    /** Maintenance window duration for device updates. Valid values 0 to 5 */
    public ?float $maintenanceWindowDurationInHours = null;

    /** Maintenance window start time for device updates. */
    public ?string $maintenanceWindowStartTime = null;

    /** Indicates whether or not to Block wireless projection. */
    public ?bool $miracastBlocked = null;

    /**  */
    public ?MiracastChannel $miracastChannel = null;

    /** Indicates whether or not to require a pin for wireless projection. */
    public ?bool $miracastRequirePin = null;

    /** Specifies whether to disable the 'My meetings and files' feature in the Start menu, which shows the signed-in user's meetings and files from Office 365. */
    public ?bool $settingsBlockMyMeetingsAndFiles = null;

    /** Specifies whether to allow the ability to resume a session when the session times out. */
    public ?bool $settingsBlockSessionResume = null;

    /** Specifies whether to disable auto-populating of the sign-in dialog with invitees from scheduled meetings. */
    public ?bool $settingsBlockSigninSuggestions = null;

    /** Specifies the default volume value for a new session. Permitted values are 0-100. The default is 45. Valid values 0 to 100 */
    public ?float $settingsDefaultVolume = null;

    /** Specifies the number of minutes until the Hub screen turns off. */
    public ?float $settingsScreenTimeoutInMinutes = null;

    /** Specifies the number of minutes until the session times out. */
    public ?float $settingsSessionTimeoutInMinutes = null;

    /** Specifies the number of minutes until the Hub enters sleep mode. */
    public ?float $settingsSleepTimeoutInMinutes = null;

    /** The welcome screen background image URL. The URL must use the HTTPS protocol and return a PNG image. */
    public ?string $welcomeScreenBackgroundImageUrl = null;

    /** Indicates whether or not to Block the welcome screen from waking up automatically when someone enters the room. */
    public ?bool $welcomeScreenBlockAutomaticWakeUp = null;

    /**  */
    public ?WelcomeScreenMeetingInformation $welcomeScreenMeetingInformation = null;


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
        if (isset($data['azureOperationalInsightsBlockTelemetry'])) {
            $this->azureOperationalInsightsBlockTelemetry = $data['azureOperationalInsightsBlockTelemetry'];
        }
        if (isset($data['azureOperationalInsightsWorkspaceId'])) {
            $this->azureOperationalInsightsWorkspaceId = $data['azureOperationalInsightsWorkspaceId'];
        }
        if (isset($data['azureOperationalInsightsWorkspaceKey'])) {
            $this->azureOperationalInsightsWorkspaceKey = $data['azureOperationalInsightsWorkspaceKey'];
        }
        if (isset($data['connectAppBlockAutoLaunch'])) {
            $this->connectAppBlockAutoLaunch = $data['connectAppBlockAutoLaunch'];
        }
        if (isset($data['maintenanceWindowBlocked'])) {
            $this->maintenanceWindowBlocked = $data['maintenanceWindowBlocked'];
        }
        if (isset($data['maintenanceWindowDurationInHours'])) {
            $this->maintenanceWindowDurationInHours = $data['maintenanceWindowDurationInHours'];
        }
        if (isset($data['maintenanceWindowStartTime'])) {
            $this->maintenanceWindowStartTime = $data['maintenanceWindowStartTime'];
        }
        if (isset($data['miracastBlocked'])) {
            $this->miracastBlocked = $data['miracastBlocked'];
        }
        if (isset($data['miracastChannel'])) {
            $this->miracastChannel = is_array($data['miracastChannel']) ? new MiracastChannel($data['miracastChannel']) : $data['miracastChannel'];
        }
        if (isset($data['miracastRequirePin'])) {
            $this->miracastRequirePin = $data['miracastRequirePin'];
        }
        if (isset($data['settingsBlockMyMeetingsAndFiles'])) {
            $this->settingsBlockMyMeetingsAndFiles = $data['settingsBlockMyMeetingsAndFiles'];
        }
        if (isset($data['settingsBlockSessionResume'])) {
            $this->settingsBlockSessionResume = $data['settingsBlockSessionResume'];
        }
        if (isset($data['settingsBlockSigninSuggestions'])) {
            $this->settingsBlockSigninSuggestions = $data['settingsBlockSigninSuggestions'];
        }
        if (isset($data['settingsDefaultVolume'])) {
            $this->settingsDefaultVolume = $data['settingsDefaultVolume'];
        }
        if (isset($data['settingsScreenTimeoutInMinutes'])) {
            $this->settingsScreenTimeoutInMinutes = $data['settingsScreenTimeoutInMinutes'];
        }
        if (isset($data['settingsSessionTimeoutInMinutes'])) {
            $this->settingsSessionTimeoutInMinutes = $data['settingsSessionTimeoutInMinutes'];
        }
        if (isset($data['settingsSleepTimeoutInMinutes'])) {
            $this->settingsSleepTimeoutInMinutes = $data['settingsSleepTimeoutInMinutes'];
        }
        if (isset($data['welcomeScreenBackgroundImageUrl'])) {
            $this->welcomeScreenBackgroundImageUrl = $data['welcomeScreenBackgroundImageUrl'];
        }
        if (isset($data['welcomeScreenBlockAutomaticWakeUp'])) {
            $this->welcomeScreenBlockAutomaticWakeUp = $data['welcomeScreenBlockAutomaticWakeUp'];
        }
        if (isset($data['welcomeScreenMeetingInformation'])) {
            $this->welcomeScreenMeetingInformation = is_array($data['welcomeScreenMeetingInformation']) ? new WelcomeScreenMeetingInformation($data['welcomeScreenMeetingInformation']) : $data['welcomeScreenMeetingInformation'];
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
