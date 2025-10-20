<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateForBusinessConfiguration
 */
class WindowsUpdateForBusinessConfiguration
{
    /**
     * When TRUE, allows eligible Windows 10 devices to upgrade to Windows 11. When FALSE, implies the device stays on the existing operating system. Returned by default. Query parameters are not supported.
     */
    private ?bool $allowWindows11Upgrade;

    /**
     */
    private ?string $automaticUpdateMode;

    /**
     */
    private ?string $autoRestartNotificationDismissal;

    /**
     */
    private ?string $businessReadyUpdatesOnly;

    /**
     * Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     */
    private ?float $deadlineForFeatureUpdatesInDays;

    /**
     * Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     */
    private ?float $deadlineForQualityUpdatesInDays;

    /**
     * Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported.
     */
    private ?float $deadlineGracePeriodInDays;

    /**
     */
    private ?string $deliveryOptimizationMode;

    /**
     * When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported.
     */
    private ?bool $driversExcluded;

    /**
     * Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported.
     */
    private ?float $engagedRestartDeadlineInDays;

    /**
     * Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported.
     */
    private ?float $engagedRestartSnoozeScheduleInDays;

    /**
     * Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     */
    private ?float $engagedRestartTransitionScheduleInDays;

    /**
     * Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     */
    private ?float $featureUpdatesDeferralPeriodInDays;

    /**
     * When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s
     */
    private ?bool $featureUpdatesPaused;

    /**
     * The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     */
    private ?\DateTimeInterface $featureUpdatesPauseExpiryDateTime;

    /**
     * The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     */
    private ?\DateTimeInterface $featureUpdatesPauseStartDate;

    /**
     * The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported.
     */
    private ?\DateTimeInterface $featureUpdatesRollbackStartDateTime;

    /**
     * The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported.
     */
    private ?float $featureUpdatesRollbackWindowInDays;

    /**
     * When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported.
     */
    private ?bool $featureUpdatesWillBeRolledBack;

    /**
     * The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported.
     */
    private ?string $installationSchedule;

    /**
     * When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported.
     */
    private ?bool $microsoftUpdateServiceAllowed;

    /**
     * When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported.
     */
    private ?bool $postponeRebootUntilAfterDeadline;

    /**
     */
    private ?string $prereleaseFeatures;

    /**
     * Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported.
     */
    private ?float $qualityUpdatesDeferralPeriodInDays;

    /**
     * When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported.
     */
    private ?bool $qualityUpdatesPaused;

    /**
     * The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported.
     */
    private ?\DateTimeInterface $qualityUpdatesPauseExpiryDateTime;

    /**
     * The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only.
     */
    private ?\DateTimeInterface $qualityUpdatesPauseStartDate;

    /**
     * The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported.
     */
    private ?\DateTimeInterface $qualityUpdatesRollbackStartDateTime;

    /**
     * When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported.
     */
    private ?bool $qualityUpdatesWillBeRolledBack;

    /**
     * Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported.
     */
    private ?float $scheduleImminentRestartWarningInMinutes;

    /**
     * Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported.
     */
    private ?float $scheduleRestartWarningInHours;

    /**
     * When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported.
     */
    private ?bool $skipChecksBeforeRestart;

    /**
     */
    private ?string $updateNotificationLevel;

    /**
     * Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue.
     */
    private ?string $updateWeeks;

    /**
     */
    private ?string $userPauseAccess;

    /**
     * Windows Update for business configuration, allows you to specify how and when Windows as a Service updates your Windows 10/11 devices with feature and quality updates. Supports ODATA clauses that DeviceConfiguration entity supports: $filter by types of DeviceConfiguration, $top, $select only DeviceConfiguration base properties, $orderby only DeviceConfiguration base properties, and $skip. The query parameter ''$search'' is not supported.
     */
    private ?string $userWindowsUpdateScanAccess;

    public function getAllowWindows11Upgrade(): ?bool
    {
        return $this->allowWindows11Upgrade;
    }

    public function setAllowWindows11Upgrade(?bool $allowWindows11Upgrade): self
    {
        $this->allowWindows11Upgrade = $allowWindows11Upgrade;
        return $this;
    }

    public function getAutomaticUpdateMode(): ?string
    {
        return $this->automaticUpdateMode;
    }

    public function setAutomaticUpdateMode(?string $automaticUpdateMode): self
    {
        $this->automaticUpdateMode = $automaticUpdateMode;
        return $this;
    }

    public function getAutoRestartNotificationDismissal(): ?string
    {
        return $this->autoRestartNotificationDismissal;
    }

    public function setAutoRestartNotificationDismissal(?string $autoRestartNotificationDismissal): self
    {
        $this->autoRestartNotificationDismissal = $autoRestartNotificationDismissal;
        return $this;
    }

    public function getBusinessReadyUpdatesOnly(): ?string
    {
        return $this->businessReadyUpdatesOnly;
    }

    public function setBusinessReadyUpdatesOnly(?string $businessReadyUpdatesOnly): self
    {
        $this->businessReadyUpdatesOnly = $businessReadyUpdatesOnly;
        return $this;
    }

    public function getDeadlineForFeatureUpdatesInDays(): ?float
    {
        return $this->deadlineForFeatureUpdatesInDays;
    }

    public function setDeadlineForFeatureUpdatesInDays(?float $deadlineForFeatureUpdatesInDays): self
    {
        $this->deadlineForFeatureUpdatesInDays = $deadlineForFeatureUpdatesInDays;
        return $this;
    }

    public function getDeadlineForQualityUpdatesInDays(): ?float
    {
        return $this->deadlineForQualityUpdatesInDays;
    }

    public function setDeadlineForQualityUpdatesInDays(?float $deadlineForQualityUpdatesInDays): self
    {
        $this->deadlineForQualityUpdatesInDays = $deadlineForQualityUpdatesInDays;
        return $this;
    }

    public function getDeadlineGracePeriodInDays(): ?float
    {
        return $this->deadlineGracePeriodInDays;
    }

    public function setDeadlineGracePeriodInDays(?float $deadlineGracePeriodInDays): self
    {
        $this->deadlineGracePeriodInDays = $deadlineGracePeriodInDays;
        return $this;
    }

    public function getDeliveryOptimizationMode(): ?string
    {
        return $this->deliveryOptimizationMode;
    }

    public function setDeliveryOptimizationMode(?string $deliveryOptimizationMode): self
    {
        $this->deliveryOptimizationMode = $deliveryOptimizationMode;
        return $this;
    }

    public function getDriversExcluded(): ?bool
    {
        return $this->driversExcluded;
    }

    public function setDriversExcluded(?bool $driversExcluded): self
    {
        $this->driversExcluded = $driversExcluded;
        return $this;
    }

    public function getEngagedRestartDeadlineInDays(): ?float
    {
        return $this->engagedRestartDeadlineInDays;
    }

    public function setEngagedRestartDeadlineInDays(?float $engagedRestartDeadlineInDays): self
    {
        $this->engagedRestartDeadlineInDays = $engagedRestartDeadlineInDays;
        return $this;
    }

    public function getEngagedRestartSnoozeScheduleInDays(): ?float
    {
        return $this->engagedRestartSnoozeScheduleInDays;
    }

    public function setEngagedRestartSnoozeScheduleInDays(?float $engagedRestartSnoozeScheduleInDays): self
    {
        $this->engagedRestartSnoozeScheduleInDays = $engagedRestartSnoozeScheduleInDays;
        return $this;
    }

    public function getEngagedRestartTransitionScheduleInDays(): ?float
    {
        return $this->engagedRestartTransitionScheduleInDays;
    }

    public function setEngagedRestartTransitionScheduleInDays(?float $engagedRestartTransitionScheduleInDays): self
    {
        $this->engagedRestartTransitionScheduleInDays = $engagedRestartTransitionScheduleInDays;
        return $this;
    }

    public function getFeatureUpdatesDeferralPeriodInDays(): ?float
    {
        return $this->featureUpdatesDeferralPeriodInDays;
    }

    public function setFeatureUpdatesDeferralPeriodInDays(?float $featureUpdatesDeferralPeriodInDays): self
    {
        $this->featureUpdatesDeferralPeriodInDays = $featureUpdatesDeferralPeriodInDays;
        return $this;
    }

    public function getFeatureUpdatesPaused(): ?bool
    {
        return $this->featureUpdatesPaused;
    }

    public function setFeatureUpdatesPaused(?bool $featureUpdatesPaused): self
    {
        $this->featureUpdatesPaused = $featureUpdatesPaused;
        return $this;
    }

    public function getFeatureUpdatesPauseExpiryDateTime(): ?\DateTimeInterface
    {
        return $this->featureUpdatesPauseExpiryDateTime;
    }

    public function setFeatureUpdatesPauseExpiryDateTime(?\DateTimeInterface $featureUpdatesPauseExpiryDateTime): self
    {
        $this->featureUpdatesPauseExpiryDateTime = $featureUpdatesPauseExpiryDateTime;
        return $this;
    }

    public function getFeatureUpdatesPauseStartDate(): ?\DateTimeInterface
    {
        return $this->featureUpdatesPauseStartDate;
    }

    public function setFeatureUpdatesPauseStartDate(?\DateTimeInterface $featureUpdatesPauseStartDate): self
    {
        $this->featureUpdatesPauseStartDate = $featureUpdatesPauseStartDate;
        return $this;
    }

    public function getFeatureUpdatesRollbackStartDateTime(): ?\DateTimeInterface
    {
        return $this->featureUpdatesRollbackStartDateTime;
    }

    public function setFeatureUpdatesRollbackStartDateTime(?\DateTimeInterface $featureUpdatesRollbackStartDateTime): self
    {
        $this->featureUpdatesRollbackStartDateTime = $featureUpdatesRollbackStartDateTime;
        return $this;
    }

    public function getFeatureUpdatesRollbackWindowInDays(): ?float
    {
        return $this->featureUpdatesRollbackWindowInDays;
    }

    public function setFeatureUpdatesRollbackWindowInDays(?float $featureUpdatesRollbackWindowInDays): self
    {
        $this->featureUpdatesRollbackWindowInDays = $featureUpdatesRollbackWindowInDays;
        return $this;
    }

    public function getFeatureUpdatesWillBeRolledBack(): ?bool
    {
        return $this->featureUpdatesWillBeRolledBack;
    }

    public function setFeatureUpdatesWillBeRolledBack(?bool $featureUpdatesWillBeRolledBack): self
    {
        $this->featureUpdatesWillBeRolledBack = $featureUpdatesWillBeRolledBack;
        return $this;
    }

    public function getInstallationSchedule(): ?string
    {
        return $this->installationSchedule;
    }

    public function setInstallationSchedule(?string $installationSchedule): self
    {
        $this->installationSchedule = $installationSchedule;
        return $this;
    }

    public function getMicrosoftUpdateServiceAllowed(): ?bool
    {
        return $this->microsoftUpdateServiceAllowed;
    }

    public function setMicrosoftUpdateServiceAllowed(?bool $microsoftUpdateServiceAllowed): self
    {
        $this->microsoftUpdateServiceAllowed = $microsoftUpdateServiceAllowed;
        return $this;
    }

    public function getPostponeRebootUntilAfterDeadline(): ?bool
    {
        return $this->postponeRebootUntilAfterDeadline;
    }

    public function setPostponeRebootUntilAfterDeadline(?bool $postponeRebootUntilAfterDeadline): self
    {
        $this->postponeRebootUntilAfterDeadline = $postponeRebootUntilAfterDeadline;
        return $this;
    }

    public function getPrereleaseFeatures(): ?string
    {
        return $this->prereleaseFeatures;
    }

    public function setPrereleaseFeatures(?string $prereleaseFeatures): self
    {
        $this->prereleaseFeatures = $prereleaseFeatures;
        return $this;
    }

    public function getQualityUpdatesDeferralPeriodInDays(): ?float
    {
        return $this->qualityUpdatesDeferralPeriodInDays;
    }

    public function setQualityUpdatesDeferralPeriodInDays(?float $qualityUpdatesDeferralPeriodInDays): self
    {
        $this->qualityUpdatesDeferralPeriodInDays = $qualityUpdatesDeferralPeriodInDays;
        return $this;
    }

    public function getQualityUpdatesPaused(): ?bool
    {
        return $this->qualityUpdatesPaused;
    }

    public function setQualityUpdatesPaused(?bool $qualityUpdatesPaused): self
    {
        $this->qualityUpdatesPaused = $qualityUpdatesPaused;
        return $this;
    }

    public function getQualityUpdatesPauseExpiryDateTime(): ?\DateTimeInterface
    {
        return $this->qualityUpdatesPauseExpiryDateTime;
    }

    public function setQualityUpdatesPauseExpiryDateTime(?\DateTimeInterface $qualityUpdatesPauseExpiryDateTime): self
    {
        $this->qualityUpdatesPauseExpiryDateTime = $qualityUpdatesPauseExpiryDateTime;
        return $this;
    }

    public function getQualityUpdatesPauseStartDate(): ?\DateTimeInterface
    {
        return $this->qualityUpdatesPauseStartDate;
    }

    public function setQualityUpdatesPauseStartDate(?\DateTimeInterface $qualityUpdatesPauseStartDate): self
    {
        $this->qualityUpdatesPauseStartDate = $qualityUpdatesPauseStartDate;
        return $this;
    }

    public function getQualityUpdatesRollbackStartDateTime(): ?\DateTimeInterface
    {
        return $this->qualityUpdatesRollbackStartDateTime;
    }

    public function setQualityUpdatesRollbackStartDateTime(?\DateTimeInterface $qualityUpdatesRollbackStartDateTime): self
    {
        $this->qualityUpdatesRollbackStartDateTime = $qualityUpdatesRollbackStartDateTime;
        return $this;
    }

    public function getQualityUpdatesWillBeRolledBack(): ?bool
    {
        return $this->qualityUpdatesWillBeRolledBack;
    }

    public function setQualityUpdatesWillBeRolledBack(?bool $qualityUpdatesWillBeRolledBack): self
    {
        $this->qualityUpdatesWillBeRolledBack = $qualityUpdatesWillBeRolledBack;
        return $this;
    }

    public function getScheduleImminentRestartWarningInMinutes(): ?float
    {
        return $this->scheduleImminentRestartWarningInMinutes;
    }

    public function setScheduleImminentRestartWarningInMinutes(?float $scheduleImminentRestartWarningInMinutes): self
    {
        $this->scheduleImminentRestartWarningInMinutes = $scheduleImminentRestartWarningInMinutes;
        return $this;
    }

    public function getScheduleRestartWarningInHours(): ?float
    {
        return $this->scheduleRestartWarningInHours;
    }

    public function setScheduleRestartWarningInHours(?float $scheduleRestartWarningInHours): self
    {
        $this->scheduleRestartWarningInHours = $scheduleRestartWarningInHours;
        return $this;
    }

    public function getSkipChecksBeforeRestart(): ?bool
    {
        return $this->skipChecksBeforeRestart;
    }

    public function setSkipChecksBeforeRestart(?bool $skipChecksBeforeRestart): self
    {
        $this->skipChecksBeforeRestart = $skipChecksBeforeRestart;
        return $this;
    }

    public function getUpdateNotificationLevel(): ?string
    {
        return $this->updateNotificationLevel;
    }

    public function setUpdateNotificationLevel(?string $updateNotificationLevel): self
    {
        $this->updateNotificationLevel = $updateNotificationLevel;
        return $this;
    }

    public function getUpdateWeeks(): ?string
    {
        return $this->updateWeeks;
    }

    public function setUpdateWeeks(?string $updateWeeks): self
    {
        $this->updateWeeks = $updateWeeks;
        return $this;
    }

    public function getUserPauseAccess(): ?string
    {
        return $this->userPauseAccess;
    }

    public function setUserPauseAccess(?string $userPauseAccess): self
    {
        $this->userPauseAccess = $userPauseAccess;
        return $this;
    }

    public function getUserWindowsUpdateScanAccess(): ?string
    {
        return $this->userWindowsUpdateScanAccess;
    }

    public function setUserWindowsUpdateScanAccess(?string $userWindowsUpdateScanAccess): self
    {
        $this->userWindowsUpdateScanAccess = $userWindowsUpdateScanAccess;
        return $this;
    }

}
