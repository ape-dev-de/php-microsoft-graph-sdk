<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateForBusinessConfiguration resources
 *
 * Available select fields:
 * - allowWindows11Upgrade
 * - automaticUpdateMode
 * - autoRestartNotificationDismissal
 * - businessReadyUpdatesOnly
 * - deadlineForFeatureUpdatesInDays
 * - deadlineForQualityUpdatesInDays
 * - deadlineGracePeriodInDays
 * - deliveryOptimizationMode
 * - driversExcluded
 * - engagedRestartDeadlineInDays
 * - engagedRestartSnoozeScheduleInDays
 * - engagedRestartTransitionScheduleInDays
 * - featureUpdatesDeferralPeriodInDays
 * - featureUpdatesPaused
 * - featureUpdatesPauseExpiryDateTime
 * - featureUpdatesPauseStartDate
 * - featureUpdatesRollbackStartDateTime
 * - featureUpdatesRollbackWindowInDays
 * - featureUpdatesWillBeRolledBack
 * - installationSchedule
 * - microsoftUpdateServiceAllowed
 * - postponeRebootUntilAfterDeadline
 * - prereleaseFeatures
 * - qualityUpdatesDeferralPeriodInDays
 * - qualityUpdatesPaused
 * - qualityUpdatesPauseExpiryDateTime
 * - qualityUpdatesPauseStartDate
 * - qualityUpdatesRollbackStartDateTime
 * - qualityUpdatesWillBeRolledBack
 * - scheduleImminentRestartWarningInMinutes
 * - scheduleRestartWarningInHours
 * - skipChecksBeforeRestart
 * - updateNotificationLevel
 * - updateWeeks
 * - userPauseAccess
 * - userWindowsUpdateScanAccess
 */
class WindowsUpdateForBusinessConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateForBusinessConfiguration
     */
    public const FIELD_ALLOW_WINDOWS11UPGRADE = 'allowWindows11Upgrade';
    public const FIELD_AUTOMATIC_UPDATE_MODE = 'automaticUpdateMode';
    public const FIELD_AUTO_RESTART_NOTIFICATION_DISMISSAL = 'autoRestartNotificationDismissal';
    public const FIELD_BUSINESS_READY_UPDATES_ONLY = 'businessReadyUpdatesOnly';
    public const FIELD_DEADLINE_FOR_FEATURE_UPDATES_IN_DAYS = 'deadlineForFeatureUpdatesInDays';
    public const FIELD_DEADLINE_FOR_QUALITY_UPDATES_IN_DAYS = 'deadlineForQualityUpdatesInDays';
    public const FIELD_DEADLINE_GRACE_PERIOD_IN_DAYS = 'deadlineGracePeriodInDays';
    public const FIELD_DELIVERY_OPTIMIZATION_MODE = 'deliveryOptimizationMode';
    public const FIELD_DRIVERS_EXCLUDED = 'driversExcluded';
    public const FIELD_ENGAGED_RESTART_DEADLINE_IN_DAYS = 'engagedRestartDeadlineInDays';
    public const FIELD_ENGAGED_RESTART_SNOOZE_SCHEDULE_IN_DAYS = 'engagedRestartSnoozeScheduleInDays';
    public const FIELD_ENGAGED_RESTART_TRANSITION_SCHEDULE_IN_DAYS = 'engagedRestartTransitionScheduleInDays';
    public const FIELD_FEATURE_UPDATES_DEFERRAL_PERIOD_IN_DAYS = 'featureUpdatesDeferralPeriodInDays';
    public const FIELD_FEATURE_UPDATES_PAUSED = 'featureUpdatesPaused';
    public const FIELD_FEATURE_UPDATES_PAUSE_EXPIRY_DATE_TIME = 'featureUpdatesPauseExpiryDateTime';
    public const FIELD_FEATURE_UPDATES_PAUSE_START_DATE = 'featureUpdatesPauseStartDate';
    public const FIELD_FEATURE_UPDATES_ROLLBACK_START_DATE_TIME = 'featureUpdatesRollbackStartDateTime';
    public const FIELD_FEATURE_UPDATES_ROLLBACK_WINDOW_IN_DAYS = 'featureUpdatesRollbackWindowInDays';
    public const FIELD_FEATURE_UPDATES_WILL_BE_ROLLED_BACK = 'featureUpdatesWillBeRolledBack';
    public const FIELD_INSTALLATION_SCHEDULE = 'installationSchedule';
    public const FIELD_MICROSOFT_UPDATE_SERVICE_ALLOWED = 'microsoftUpdateServiceAllowed';
    public const FIELD_POSTPONE_REBOOT_UNTIL_AFTER_DEADLINE = 'postponeRebootUntilAfterDeadline';
    public const FIELD_PRERELEASE_FEATURES = 'prereleaseFeatures';
    public const FIELD_QUALITY_UPDATES_DEFERRAL_PERIOD_IN_DAYS = 'qualityUpdatesDeferralPeriodInDays';
    public const FIELD_QUALITY_UPDATES_PAUSED = 'qualityUpdatesPaused';
    public const FIELD_QUALITY_UPDATES_PAUSE_EXPIRY_DATE_TIME = 'qualityUpdatesPauseExpiryDateTime';
    public const FIELD_QUALITY_UPDATES_PAUSE_START_DATE = 'qualityUpdatesPauseStartDate';
    public const FIELD_QUALITY_UPDATES_ROLLBACK_START_DATE_TIME = 'qualityUpdatesRollbackStartDateTime';
    public const FIELD_QUALITY_UPDATES_WILL_BE_ROLLED_BACK = 'qualityUpdatesWillBeRolledBack';
    public const FIELD_SCHEDULE_IMMINENT_RESTART_WARNING_IN_MINUTES = 'scheduleImminentRestartWarningInMinutes';
    public const FIELD_SCHEDULE_RESTART_WARNING_IN_HOURS = 'scheduleRestartWarningInHours';
    public const FIELD_SKIP_CHECKS_BEFORE_RESTART = 'skipChecksBeforeRestart';
    public const FIELD_UPDATE_NOTIFICATION_LEVEL = 'updateNotificationLevel';
    public const FIELD_UPDATE_WEEKS = 'updateWeeks';
    public const FIELD_USER_PAUSE_ACCESS = 'userPauseAccess';
    public const FIELD_USER_WINDOWS_UPDATE_SCAN_ACCESS = 'userWindowsUpdateScanAccess';

    /**
     * Select specific WindowsUpdateForBusinessConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
