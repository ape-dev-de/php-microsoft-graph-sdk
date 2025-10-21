<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthOSVersionPerformance
 */
class UserExperienceAnalyticsAppHealthOSVersionPerformance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The number of active devices for the OS version. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $activeDeviceCount = null,
        /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $meanTimeToFailureInMinutes = null,
        /** The OS build number installed on the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $osBuildNumber = null,
        /** The OS version installed on the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $osVersion = null,
        /** The user experience analytics device OS version performance entity contains OS version performance details. */
        public ?string $osVersionAppHealthScore = null
    ) {}
}
