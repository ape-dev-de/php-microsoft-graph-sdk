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
        /** The date and time when the statistics were last computed. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only. */
        public ?\DateTimeInterface $processedDateTime = null
    ) {}
}
