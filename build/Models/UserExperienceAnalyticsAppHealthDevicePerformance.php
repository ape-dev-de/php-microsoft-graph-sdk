<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDevicePerformance
 */
class UserExperienceAnalyticsAppHealthDevicePerformance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The number of application crashes for the device. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appCrashCount = null,
        /** The number of application hangs for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $appHangCount = null,
        /** The number of distinct application crashes for the device. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $crashedAppCount = null,
        /** The application health score of the device. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $deviceAppHealthScore = null,
        /** The name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceDisplayName = null,
        /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceId = null,
        /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceManufacturer = null,
        /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceModel = null,
        /**  */
        public ?string $healthStatus = null,
        /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $meanTimeToFailureInMinutes = null,
        /** The user experience analytics device performance entity contains device performance details. */
        public ?\DateTimeInterface $processedDateTime = null
    ) {}
}
