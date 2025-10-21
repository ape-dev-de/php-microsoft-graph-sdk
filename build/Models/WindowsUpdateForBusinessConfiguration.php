<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateForBusinessConfiguration
 */
class WindowsUpdateForBusinessConfiguration
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
        /** When TRUE, allows eligible Windows 10 devices to upgrade to Windows 11. When FALSE, implies the device stays on the existing operating system. Returned by default. Query parameters are not supported. */
        public ?bool $allowWindows11Upgrade = null,
        /**  */
        public ?AutomaticUpdateMode $automaticUpdateMode = null,
        /**  */
        public ?AutoRestartNotificationDismissalMethod $autoRestartNotificationDismissal = null,
        /**  */
        public ?WindowsUpdateType $businessReadyUpdatesOnly = null,
        /** Number of days before feature updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported. */
        public ?float $deadlineForFeatureUpdatesInDays = null,
        /** Number of days before quality updates are installed automatically with valid range from 0 to 30 days. Returned by default. Query parameters are not supported. */
        public ?float $deadlineForQualityUpdatesInDays = null,
        /** Number of days after deadline until restarts occur automatically with valid range from 0 to 7 days. Returned by default. Query parameters are not supported. */
        public ?float $deadlineGracePeriodInDays = null,
        /**  */
        public ?WindowsDeliveryOptimizationMode $deliveryOptimizationMode = null,
        /** When TRUE, excludes Windows update Drivers. When FALSE, does not exclude Windows update Drivers. Returned by default. Query parameters are not supported. */
        public ?bool $driversExcluded = null,
        /** Deadline in days before automatically scheduling and executing a pending restart outside of active hours, with valid range from 2 to 30 days. Returned by default. Query parameters are not supported. */
        public ?float $engagedRestartDeadlineInDays = null,
        /** Number of days a user can snooze Engaged Restart reminder notifications with valid range from 1 to 3 days. Returned by default. Query parameters are not supported. */
        public ?float $engagedRestartSnoozeScheduleInDays = null,
        /** Number of days before transitioning from Auto Restarts scheduled outside of active hours to Engaged Restart, which requires the user to schedule, with valid range from 0 to 30 days. Returned by default. Query parameters are not supported. */
        public ?float $engagedRestartTransitionScheduleInDays = null,
        /** Defer Feature Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported. */
        public ?float $featureUpdatesDeferralPeriodInDays = null,
        /** When TRUE, assigned devices are paused from receiving feature updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Feature Updates. Returned by default. Query parameters are not supported.s */
        public ?bool $featureUpdatesPaused = null,
        /** The Feature Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. */
        public ?\DateTimeInterface $featureUpdatesPauseExpiryDateTime = null,
        /** The Feature Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only. */
        public ?\DateTimeInterface $featureUpdatesPauseStartDate = null,
        /** The Feature Updates Rollback Start datetime.This value is the time when the admin rolled back the Feature update for the ring.Returned by default.Query parameters are not supported. */
        public ?\DateTimeInterface $featureUpdatesRollbackStartDateTime = null,
        /** The number of days after a Feature Update for which a rollback is valid with valid range from 2 to 60 days. Returned by default. Query parameters are not supported. */
        public ?float $featureUpdatesRollbackWindowInDays = null,
        /** When TRUE, rollback Feature Updates on the next device check in. When FALSE, do not rollback Feature Updates on the next device check in. Returned by default.Query parameters are not supported. */
        public ?bool $featureUpdatesWillBeRolledBack = null,
        /** The Installation Schedule. Possible values are: ActiveHoursStart, ActiveHoursEnd, ScheduledInstallDay, ScheduledInstallTime. Returned by default. Query parameters are not supported. */
        public ?WindowsUpdateInstallScheduleType $installationSchedule = null,
        /** When TRUE, allows Microsoft Update Service. When FALSE, does not allow Microsoft Update Service. Returned by default. Query parameters are not supported. */
        public ?bool $microsoftUpdateServiceAllowed = null,
        /** When TRUE the device should wait until deadline for rebooting outside of active hours. When FALSE the device should not wait until deadline for rebooting outside of active hours. Returned by default. Query parameters are not supported. */
        public ?bool $postponeRebootUntilAfterDeadline = null,
        /**  */
        public ?PrereleaseFeatures $prereleaseFeatures = null,
        /** Defer Quality Updates by these many days with valid range from 0 to 30 days. Returned by default. Query parameters are not supported. */
        public ?float $qualityUpdatesDeferralPeriodInDays = null,
        /** When TRUE, assigned devices are paused from receiving quality updates for up to 35 days from the time you pause the ring. When FALSE, does not pause Quality Updates. Returned by default. Query parameters are not supported. */
        public ?bool $qualityUpdatesPaused = null,
        /** The Quality Updates Pause Expiry datetime. This value is 35 days from the time admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. */
        public ?\DateTimeInterface $qualityUpdatesPauseExpiryDateTime = null,
        /** The Quality Updates Pause start date. This value is the time when the admin paused or extended the pause for the ring. Returned by default. Query parameters are not supported. This property is read-only. */
        public ?\DateTimeInterface $qualityUpdatesPauseStartDate = null,
        /** The Quality Updates Rollback Start datetime. This value is the time when the admin rolled back the Quality update for the ring. Returned by default. Query parameters are not supported. */
        public ?\DateTimeInterface $qualityUpdatesRollbackStartDateTime = null,
        /** When TRUE, rollback Quality Updates on the next device check in. When FALSE, do not rollback Quality Updates on the next device check in. Returned by default. Query parameters are not supported. */
        public ?bool $qualityUpdatesWillBeRolledBack = null,
        /** Specify the period for auto-restart imminent warning notifications. Supported values: 15, 30 or 60 (minutes). Returned by default. Query parameters are not supported. */
        public ?float $scheduleImminentRestartWarningInMinutes = null,
        /** Specify the period for auto-restart warning reminder notifications. Supported values: 2, 4, 8, 12 or 24 (hours). Returned by default. Query parameters are not supported. */
        public ?float $scheduleRestartWarningInHours = null,
        /** When TRUE, skips all checks before restart: Battery level = 40%, User presence, Display Needed, Presentation mode, Full screen mode, phone call state, game mode etc. When FALSE, does not skip all checks before restart. Returned by default. Query parameters are not supported. */
        public ?bool $skipChecksBeforeRestart = null,
        /**  */
        public ?WindowsUpdateNotificationDisplayOption $updateNotificationLevel = null,
        /** Schedule the update installation on the weeks of the month. Possible values are: UserDefined, FirstWeek, SecondWeek, ThirdWeek, FourthWeek, EveryWeek. Returned by default. Query parameters are not supported. Possible values are: userDefined, firstWeek, secondWeek, thirdWeek, fourthWeek, everyWeek, unknownFutureValue. */
        public ?WindowsUpdateForBusinessUpdateWeeks $updateWeeks = null,
        /**  */
        public ?Enablement $userPauseAccess = null,
        /**  */
        public ?Enablement $userWindowsUpdateScanAccess = null
    ) {}
}
