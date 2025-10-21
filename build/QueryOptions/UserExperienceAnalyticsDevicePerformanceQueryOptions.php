<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDevicePerformance resources
 *
 * Available select fields:
 * - averageBlueScreens
 * - averageRestarts
 * - blueScreenCount
 * - bootScore
 * - coreBootTimeInMs
 * - coreLoginTimeInMs
 * - deviceCount
 * - deviceName
 * - diskType
 * - groupPolicyBootTimeInMs
 * - groupPolicyLoginTimeInMs
 * - healthStatus
 * - loginScore
 * - manufacturer
 * - model
 * - modelStartupPerformanceScore
 * - operatingSystemVersion
 * - responsiveDesktopTimeInMs
 * - restartCount
 * - startupPerformanceScore
 */
class UserExperienceAnalyticsDevicePerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsDevicePerformance
     */
    public const FIELD_AVERAGE_BLUE_SCREENS = 'averageBlueScreens';
    public const FIELD_AVERAGE_RESTARTS = 'averageRestarts';
    public const FIELD_BLUE_SCREEN_COUNT = 'blueScreenCount';
    public const FIELD_BOOT_SCORE = 'bootScore';
    public const FIELD_CORE_BOOT_TIME_IN_MS = 'coreBootTimeInMs';
    public const FIELD_CORE_LOGIN_TIME_IN_MS = 'coreLoginTimeInMs';
    public const FIELD_DEVICE_COUNT = 'deviceCount';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_DISK_TYPE = 'diskType';
    public const FIELD_GROUP_POLICY_BOOT_TIME_IN_MS = 'groupPolicyBootTimeInMs';
    public const FIELD_GROUP_POLICY_LOGIN_TIME_IN_MS = 'groupPolicyLoginTimeInMs';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_LOGIN_SCORE = 'loginScore';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_MODEL_STARTUP_PERFORMANCE_SCORE = 'modelStartupPerformanceScore';
    public const FIELD_OPERATING_SYSTEM_VERSION = 'operatingSystemVersion';
    public const FIELD_RESPONSIVE_DESKTOP_TIME_IN_MS = 'responsiveDesktopTimeInMs';
    public const FIELD_RESTART_COUNT = 'restartCount';
    public const FIELD_STARTUP_PERFORMANCE_SCORE = 'startupPerformanceScore';

    /**
     * Select specific UserExperienceAnalyticsDevicePerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
