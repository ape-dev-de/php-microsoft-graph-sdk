<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDeviceModelPerformance
 */
class UserExperienceAnalyticsAppHealthDeviceModelPerformance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The number of active devices for the model. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $activeDeviceCount = null,
        /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceManufacturer = null,
        /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceModel = null,
        /**  */
        public ?string $healthStatus = null,
        /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $meanTimeToFailureInMinutes = null,
        /** The user experience analytics device model performance entity contains device model performance details. */
        public ?string $modelAppHealthScore = null
    ) {}
}
