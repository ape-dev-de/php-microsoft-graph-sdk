<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
{
    public function __construct(
        /** The number of devices where the application has been active. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $activeDeviceCount = null,
        /** The number of crashes for the application. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appCrashCount = null,
        /** The friendly name of the application. Possible values are: Outlook, Excel. Supports: $select, $OrderBy. Read-only. */
        public ?string $appDisplayName = null,
        /** The name of the application. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only. */
        public ?string $appName = null,
        /** The publisher of the application. Supports: $select, $OrderBy. Read-only. */
        public ?string $appPublisher = null,
        /** The total usage time of the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appUsageDuration = null,
        /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $meanTimeToFailureInMinutes = null,
        /** The OS build number of the application. Supports: $select, $OrderBy. Read-only. */
        public ?string $osBuildNumber = null,
        /** The user experience analytics application performance entity contains app performance details by OS version. */
        public ?string $osVersion = null
    ) {}
}
