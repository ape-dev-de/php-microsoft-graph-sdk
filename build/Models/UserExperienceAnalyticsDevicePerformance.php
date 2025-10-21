<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDevicePerformance
 */
class UserExperienceAnalyticsDevicePerformance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Average (mean) number of Blue Screens per device in the last 30 days. Valid values 0 to 9999999 */
        public ?string $averageBlueScreens = null,
        /** Average (mean) number of Restarts per device in the last 30 days. Valid values 0 to 9999999 */
        public ?string $averageRestarts = null,
        /** Number of Blue Screens in the last 30 days. Valid values 0 to 9999999 */
        public ?float $blueScreenCount = null,
        /** The user experience analytics device boot score. */
        public ?float $bootScore = null,
        /** The user experience analytics device core boot time in milliseconds. */
        public ?float $coreBootTimeInMs = null,
        /** The user experience analytics device core login time in milliseconds. */
        public ?float $coreLoginTimeInMs = null,
        /** User experience analytics summarized device count. */
        public ?float $deviceCount = null,
        /** The user experience analytics device name. */
        public ?string $deviceName = null,
        /**  */
        public ?string $diskType = null,
        /** The user experience analytics device group policy boot time in milliseconds. */
        public ?float $groupPolicyBootTimeInMs = null,
        /** The user experience analytics device group policy login time in milliseconds. */
        public ?float $groupPolicyLoginTimeInMs = null,
        /**  */
        public ?string $healthStatus = null,
        /** The user experience analytics device login score. */
        public ?float $loginScore = null,
        /** The user experience analytics device manufacturer. */
        public ?string $manufacturer = null,
        /** The user experience analytics device model. */
        public ?string $model = null,
        /** The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $modelStartupPerformanceScore = null,
        /** The user experience analytics device Operating System version. */
        public ?string $operatingSystemVersion = null,
        /** The user experience analytics responsive desktop time in milliseconds. */
        public ?float $responsiveDesktopTimeInMs = null,
        /** Number of Restarts in the last 30 days. Valid values 0 to 9999999 */
        public ?float $restartCount = null,
        /** The user experience analytics device performance entity contains device boot performance details. */
        public ?string $startupPerformanceScore = null
    ) {}
}
