<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10TeamGeneralConfiguration
 */
class Windows10TeamGeneralConfiguration
{
    /**
     * Indicates whether or not to Block Azure Operational Insights.
     */
    private ?bool $azureOperationalInsightsBlockTelemetry;

    /**
     * The Azure Operational Insights workspace id.
     */
    private ?string $azureOperationalInsightsWorkspaceId;

    /**
     * The Azure Operational Insights Workspace key.
     */
    private ?string $azureOperationalInsightsWorkspaceKey;

    /**
     * Specifies whether to automatically launch the Connect app whenever a projection is initiated.
     */
    private ?bool $connectAppBlockAutoLaunch;

    /**
     * Indicates whether or not to Block setting a maintenance window for device updates.
     */
    private ?bool $maintenanceWindowBlocked;

    /**
     * Maintenance window duration for device updates. Valid values 0 to 5
     */
    private ?float $maintenanceWindowDurationInHours;

    /**
     * Maintenance window start time for device updates.
     */
    private ?string $maintenanceWindowStartTime;

    /**
     * Indicates whether or not to Block wireless projection.
     */
    private ?bool $miracastBlocked;

    /**
     */
    private ?string $miracastChannel;

    /**
     * Indicates whether or not to require a pin for wireless projection.
     */
    private ?bool $miracastRequirePin;

    /**
     * Specifies whether to disable the ''My meetings and files'' feature in the Start menu, which shows the signed-in user''s meetings and files from Office 365.
     */
    private ?bool $settingsBlockMyMeetingsAndFiles;

    /**
     * Specifies whether to allow the ability to resume a session when the session times out.
     */
    private ?bool $settingsBlockSessionResume;

    /**
     * Specifies whether to disable auto-populating of the sign-in dialog with invitees from scheduled meetings.
     */
    private ?bool $settingsBlockSigninSuggestions;

    /**
     * Specifies the default volume value for a new session. Permitted values are 0-100. The default is 45. Valid values 0 to 100
     */
    private ?float $settingsDefaultVolume;

    /**
     * Specifies the number of minutes until the Hub screen turns off.
     */
    private ?float $settingsScreenTimeoutInMinutes;

    /**
     * Specifies the number of minutes until the session times out.
     */
    private ?float $settingsSessionTimeoutInMinutes;

    /**
     * Specifies the number of minutes until the Hub enters sleep mode.
     */
    private ?float $settingsSleepTimeoutInMinutes;

    /**
     * The welcome screen background image URL. The URL must use the HTTPS protocol and return a PNG image.
     */
    private ?string $welcomeScreenBackgroundImageUrl;

    /**
     * Indicates whether or not to Block the welcome screen from waking up automatically when someone enters the room.
     */
    private ?bool $welcomeScreenBlockAutomaticWakeUp;

    /**
     * This topic provides descriptions of the declared methods, properties and relationships exposed by the windows10TeamGeneralConfiguration resource.
     */
    private ?string $welcomeScreenMeetingInformation;

    public function getAzureOperationalInsightsBlockTelemetry(): ?bool
    {
        return $this->azureOperationalInsightsBlockTelemetry;
    }

    public function setAzureOperationalInsightsBlockTelemetry(?bool $azureOperationalInsightsBlockTelemetry): self
    {
        $this->azureOperationalInsightsBlockTelemetry = $azureOperationalInsightsBlockTelemetry;
        return $this;
    }

    public function getAzureOperationalInsightsWorkspaceId(): ?string
    {
        return $this->azureOperationalInsightsWorkspaceId;
    }

    public function setAzureOperationalInsightsWorkspaceId(?string $azureOperationalInsightsWorkspaceId): self
    {
        $this->azureOperationalInsightsWorkspaceId = $azureOperationalInsightsWorkspaceId;
        return $this;
    }

    public function getAzureOperationalInsightsWorkspaceKey(): ?string
    {
        return $this->azureOperationalInsightsWorkspaceKey;
    }

    public function setAzureOperationalInsightsWorkspaceKey(?string $azureOperationalInsightsWorkspaceKey): self
    {
        $this->azureOperationalInsightsWorkspaceKey = $azureOperationalInsightsWorkspaceKey;
        return $this;
    }

    public function getConnectAppBlockAutoLaunch(): ?bool
    {
        return $this->connectAppBlockAutoLaunch;
    }

    public function setConnectAppBlockAutoLaunch(?bool $connectAppBlockAutoLaunch): self
    {
        $this->connectAppBlockAutoLaunch = $connectAppBlockAutoLaunch;
        return $this;
    }

    public function getMaintenanceWindowBlocked(): ?bool
    {
        return $this->maintenanceWindowBlocked;
    }

    public function setMaintenanceWindowBlocked(?bool $maintenanceWindowBlocked): self
    {
        $this->maintenanceWindowBlocked = $maintenanceWindowBlocked;
        return $this;
    }

    public function getMaintenanceWindowDurationInHours(): ?float
    {
        return $this->maintenanceWindowDurationInHours;
    }

    public function setMaintenanceWindowDurationInHours(?float $maintenanceWindowDurationInHours): self
    {
        $this->maintenanceWindowDurationInHours = $maintenanceWindowDurationInHours;
        return $this;
    }

    public function getMaintenanceWindowStartTime(): ?string
    {
        return $this->maintenanceWindowStartTime;
    }

    public function setMaintenanceWindowStartTime(?string $maintenanceWindowStartTime): self
    {
        $this->maintenanceWindowStartTime = $maintenanceWindowStartTime;
        return $this;
    }

    public function getMiracastBlocked(): ?bool
    {
        return $this->miracastBlocked;
    }

    public function setMiracastBlocked(?bool $miracastBlocked): self
    {
        $this->miracastBlocked = $miracastBlocked;
        return $this;
    }

    public function getMiracastChannel(): ?string
    {
        return $this->miracastChannel;
    }

    public function setMiracastChannel(?string $miracastChannel): self
    {
        $this->miracastChannel = $miracastChannel;
        return $this;
    }

    public function getMiracastRequirePin(): ?bool
    {
        return $this->miracastRequirePin;
    }

    public function setMiracastRequirePin(?bool $miracastRequirePin): self
    {
        $this->miracastRequirePin = $miracastRequirePin;
        return $this;
    }

    public function getSettingsBlockMyMeetingsAndFiles(): ?bool
    {
        return $this->settingsBlockMyMeetingsAndFiles;
    }

    public function setSettingsBlockMyMeetingsAndFiles(?bool $settingsBlockMyMeetingsAndFiles): self
    {
        $this->settingsBlockMyMeetingsAndFiles = $settingsBlockMyMeetingsAndFiles;
        return $this;
    }

    public function getSettingsBlockSessionResume(): ?bool
    {
        return $this->settingsBlockSessionResume;
    }

    public function setSettingsBlockSessionResume(?bool $settingsBlockSessionResume): self
    {
        $this->settingsBlockSessionResume = $settingsBlockSessionResume;
        return $this;
    }

    public function getSettingsBlockSigninSuggestions(): ?bool
    {
        return $this->settingsBlockSigninSuggestions;
    }

    public function setSettingsBlockSigninSuggestions(?bool $settingsBlockSigninSuggestions): self
    {
        $this->settingsBlockSigninSuggestions = $settingsBlockSigninSuggestions;
        return $this;
    }

    public function getSettingsDefaultVolume(): ?float
    {
        return $this->settingsDefaultVolume;
    }

    public function setSettingsDefaultVolume(?float $settingsDefaultVolume): self
    {
        $this->settingsDefaultVolume = $settingsDefaultVolume;
        return $this;
    }

    public function getSettingsScreenTimeoutInMinutes(): ?float
    {
        return $this->settingsScreenTimeoutInMinutes;
    }

    public function setSettingsScreenTimeoutInMinutes(?float $settingsScreenTimeoutInMinutes): self
    {
        $this->settingsScreenTimeoutInMinutes = $settingsScreenTimeoutInMinutes;
        return $this;
    }

    public function getSettingsSessionTimeoutInMinutes(): ?float
    {
        return $this->settingsSessionTimeoutInMinutes;
    }

    public function setSettingsSessionTimeoutInMinutes(?float $settingsSessionTimeoutInMinutes): self
    {
        $this->settingsSessionTimeoutInMinutes = $settingsSessionTimeoutInMinutes;
        return $this;
    }

    public function getSettingsSleepTimeoutInMinutes(): ?float
    {
        return $this->settingsSleepTimeoutInMinutes;
    }

    public function setSettingsSleepTimeoutInMinutes(?float $settingsSleepTimeoutInMinutes): self
    {
        $this->settingsSleepTimeoutInMinutes = $settingsSleepTimeoutInMinutes;
        return $this;
    }

    public function getWelcomeScreenBackgroundImageUrl(): ?string
    {
        return $this->welcomeScreenBackgroundImageUrl;
    }

    public function setWelcomeScreenBackgroundImageUrl(?string $welcomeScreenBackgroundImageUrl): self
    {
        $this->welcomeScreenBackgroundImageUrl = $welcomeScreenBackgroundImageUrl;
        return $this;
    }

    public function getWelcomeScreenBlockAutomaticWakeUp(): ?bool
    {
        return $this->welcomeScreenBlockAutomaticWakeUp;
    }

    public function setWelcomeScreenBlockAutomaticWakeUp(?bool $welcomeScreenBlockAutomaticWakeUp): self
    {
        $this->welcomeScreenBlockAutomaticWakeUp = $welcomeScreenBlockAutomaticWakeUp;
        return $this;
    }

    public function getWelcomeScreenMeetingInformation(): ?string
    {
        return $this->welcomeScreenMeetingInformation;
    }

    public function setWelcomeScreenMeetingInformation(?string $welcomeScreenMeetingInformation): self
    {
        $this->welcomeScreenMeetingInformation = $welcomeScreenMeetingInformation;
        return $this;
    }

}
