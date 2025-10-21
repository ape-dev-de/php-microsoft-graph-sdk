<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupHistory resources
 *
 * Available select fields:
 * - coreBootTimeInMs
 * - coreLoginTimeInMs
 * - deviceId
 * - featureUpdateBootTimeInMs
 * - groupPolicyBootTimeInMs
 * - groupPolicyLoginTimeInMs
 * - isFeatureUpdate
 * - isFirstLogin
 * - operatingSystemVersion
 * - responsiveDesktopTimeInMs
 * - restartCategory
 * - restartFaultBucket
 * - restartStopCode
 * - startTime
 * - totalBootTimeInMs
 * - totalLoginTimeInMs
 */
class UserExperienceAnalyticsDeviceStartupHistoryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDeviceStartupHistory
     */
    public const FIELD_CORE_BOOT_TIME_IN_MS = 'coreBootTimeInMs';
    public const FIELD_CORE_LOGIN_TIME_IN_MS = 'coreLoginTimeInMs';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_FEATURE_UPDATE_BOOT_TIME_IN_MS = 'featureUpdateBootTimeInMs';
    public const FIELD_GROUP_POLICY_BOOT_TIME_IN_MS = 'groupPolicyBootTimeInMs';
    public const FIELD_GROUP_POLICY_LOGIN_TIME_IN_MS = 'groupPolicyLoginTimeInMs';
    public const FIELD_IS_FEATURE_UPDATE = 'isFeatureUpdate';
    public const FIELD_IS_FIRST_LOGIN = 'isFirstLogin';
    public const FIELD_OPERATING_SYSTEM_VERSION = 'operatingSystemVersion';
    public const FIELD_RESPONSIVE_DESKTOP_TIME_IN_MS = 'responsiveDesktopTimeInMs';
    public const FIELD_RESTART_CATEGORY = 'restartCategory';
    public const FIELD_RESTART_FAULT_BUCKET = 'restartFaultBucket';
    public const FIELD_RESTART_STOP_CODE = 'restartStopCode';
    public const FIELD_START_TIME = 'startTime';
    public const FIELD_TOTAL_BOOT_TIME_IN_MS = 'totalBootTimeInMs';
    public const FIELD_TOTAL_LOGIN_TIME_IN_MS = 'totalLoginTimeInMs';

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupHistory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
