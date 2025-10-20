<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10TeamGeneralConfiguration resources
 *
 * Available select fields:
 * - azureOperationalInsightsBlockTelemetry
 * - azureOperationalInsightsWorkspaceId
 * - azureOperationalInsightsWorkspaceKey
 * - connectAppBlockAutoLaunch
 * - maintenanceWindowBlocked
 * - maintenanceWindowDurationInHours
 * - maintenanceWindowStartTime
 * - miracastBlocked
 * - miracastChannel
 * - miracastRequirePin
 * - settingsBlockMyMeetingsAndFiles
 * - settingsBlockSessionResume
 * - settingsBlockSigninSuggestions
 * - settingsDefaultVolume
 * - settingsScreenTimeoutInMinutes
 * - settingsSessionTimeoutInMinutes
 * - settingsSleepTimeoutInMinutes
 * - welcomeScreenBackgroundImageUrl
 * - welcomeScreenBlockAutomaticWakeUp
 * - welcomeScreenMeetingInformation
 */
class Windows10TeamGeneralConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_OPERATIONAL_INSIGHTS_BLOCK_TELEMETRY = 'azureOperationalInsightsBlockTelemetry';
    public const FIELD_AZURE_OPERATIONAL_INSIGHTS_WORKSPACE_ID = 'azureOperationalInsightsWorkspaceId';
    public const FIELD_AZURE_OPERATIONAL_INSIGHTS_WORKSPACE_KEY = 'azureOperationalInsightsWorkspaceKey';
    public const FIELD_CONNECT_APP_BLOCK_AUTO_LAUNCH = 'connectAppBlockAutoLaunch';
    public const FIELD_MAINTENANCE_WINDOW_BLOCKED = 'maintenanceWindowBlocked';
    public const FIELD_MAINTENANCE_WINDOW_DURATION_IN_HOURS = 'maintenanceWindowDurationInHours';
    public const FIELD_MAINTENANCE_WINDOW_START_TIME = 'maintenanceWindowStartTime';
    public const FIELD_MIRACAST_BLOCKED = 'miracastBlocked';
    public const FIELD_MIRACAST_CHANNEL = 'miracastChannel';
    public const FIELD_MIRACAST_REQUIRE_PIN = 'miracastRequirePin';
    public const FIELD_SETTINGS_BLOCK_MY_MEETINGS_AND_FILES = 'settingsBlockMyMeetingsAndFiles';
    public const FIELD_SETTINGS_BLOCK_SESSION_RESUME = 'settingsBlockSessionResume';
    public const FIELD_SETTINGS_BLOCK_SIGNIN_SUGGESTIONS = 'settingsBlockSigninSuggestions';
    public const FIELD_SETTINGS_DEFAULT_VOLUME = 'settingsDefaultVolume';
    public const FIELD_SETTINGS_SCREEN_TIMEOUT_IN_MINUTES = 'settingsScreenTimeoutInMinutes';
    public const FIELD_SETTINGS_SESSION_TIMEOUT_IN_MINUTES = 'settingsSessionTimeoutInMinutes';
    public const FIELD_SETTINGS_SLEEP_TIMEOUT_IN_MINUTES = 'settingsSleepTimeoutInMinutes';
    public const FIELD_WELCOME_SCREEN_BACKGROUND_IMAGE_URL = 'welcomeScreenBackgroundImageUrl';
    public const FIELD_WELCOME_SCREEN_BLOCK_AUTOMATIC_WAKE_UP = 'welcomeScreenBlockAutomaticWakeUp';
    public const FIELD_WELCOME_SCREEN_MEETING_INFORMATION = 'welcomeScreenMeetingInformation';

    /**
     * Select specific Windows10TeamGeneralConfiguration properties
     * 
     * @param array<string> $select Use Windows10TeamGeneralConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
