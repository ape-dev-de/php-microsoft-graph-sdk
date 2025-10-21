<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10TeamGeneralConfiguration
 */
class Windows10TeamGeneralConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Admin provided description of the Device Configuration. */
        public ?string $description = null,
        /** Admin provided name of the device configuration. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The list of assignments for the device configuration profile. */
        public array $assignments = [],
        /** Device Configuration Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** Device configuration installation status by device. */
        public array $deviceStatuses = [],
        /** Device Configuration devices status overview */
        public ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?DeviceConfigurationUserOverview $userStatusOverview = null,
        /** Indicates whether or not to Block Azure Operational Insights. */
        public ?bool $azureOperationalInsightsBlockTelemetry = null,
        /** The Azure Operational Insights workspace id. */
        public ?string $azureOperationalInsightsWorkspaceId = null,
        /** The Azure Operational Insights Workspace key. */
        public ?string $azureOperationalInsightsWorkspaceKey = null,
        /** Specifies whether to automatically launch the Connect app whenever a projection is initiated. */
        public ?bool $connectAppBlockAutoLaunch = null,
        /** Indicates whether or not to Block setting a maintenance window for device updates. */
        public ?bool $maintenanceWindowBlocked = null,
        /** Maintenance window duration for device updates. Valid values 0 to 5 */
        public ?float $maintenanceWindowDurationInHours = null,
        /** Maintenance window start time for device updates. */
        public ?string $maintenanceWindowStartTime = null,
        /** Indicates whether or not to Block wireless projection. */
        public ?bool $miracastBlocked = null,
        /**  */
        public ?MiracastChannel $miracastChannel = null,
        /** Indicates whether or not to require a pin for wireless projection. */
        public ?bool $miracastRequirePin = null,
        /** Specifies whether to disable the 'My meetings and files' feature in the Start menu, which shows the signed-in user's meetings and files from Office 365. */
        public ?bool $settingsBlockMyMeetingsAndFiles = null,
        /** Specifies whether to allow the ability to resume a session when the session times out. */
        public ?bool $settingsBlockSessionResume = null,
        /** Specifies whether to disable auto-populating of the sign-in dialog with invitees from scheduled meetings. */
        public ?bool $settingsBlockSigninSuggestions = null,
        /** Specifies the default volume value for a new session. Permitted values are 0-100. The default is 45. Valid values 0 to 100 */
        public ?float $settingsDefaultVolume = null,
        /** Specifies the number of minutes until the Hub screen turns off. */
        public ?float $settingsScreenTimeoutInMinutes = null,
        /** Specifies the number of minutes until the session times out. */
        public ?float $settingsSessionTimeoutInMinutes = null,
        /** Specifies the number of minutes until the Hub enters sleep mode. */
        public ?float $settingsSleepTimeoutInMinutes = null,
        /** The welcome screen background image URL. The URL must use the HTTPS protocol and return a PNG image. */
        public ?string $welcomeScreenBackgroundImageUrl = null,
        /** Indicates whether or not to Block the welcome screen from waking up automatically when someone enters the room. */
        public ?bool $welcomeScreenBlockAutomaticWakeUp = null,
        /**  */
        public ?WelcomeScreenMeetingInformation $welcomeScreenMeetingInformation = null
    ) {}
}
