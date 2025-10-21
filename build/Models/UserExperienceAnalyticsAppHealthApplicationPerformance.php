<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthApplicationPerformance
 */
class UserExperienceAnalyticsAppHealthApplicationPerformance
{
    public function __construct(
        /** The health score of the application. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $activeDeviceCount = null,
        /** The number of crashes for the application. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appCrashCount = null,
        /** The friendly name of the application. Possible values are: Outlook, Excel. Supports: $select, $OrderBy. Read-only. */
        public ?string $appDisplayName = null,
        /** The number of hangs for the application. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appHangCount = null,
        /** The health score of the application. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $appHealthScore = null,
        /** The name of the application. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only. */
        public ?string $appName = null,
        /** The publisher of the application. Supports: $select, $OrderBy. Read-only. */
        public ?string $appPublisher = null,
        /** The total usage time of the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appUsageDuration = null,
        /** The user experience analytics application performance entity contains application performance details. */
        public ?string $meanTimeToFailureInMinutes = null
    ) {}
}
