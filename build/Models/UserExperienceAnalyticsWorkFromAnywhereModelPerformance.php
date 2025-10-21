<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereModelPerformance
 */
class UserExperienceAnalyticsWorkFromAnywhereModelPerformance
{
    public function __construct(
        /** The cloud identity score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $cloudIdentityScore = null,
        /** The cloud management score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $cloudManagementScore = null,
        /** The cloud provisioning score of the device model.  Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $cloudProvisioningScore = null,
        /**  */
        public ?string $healthStatus = null,
        /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $manufacturer = null,
        /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $model = null,
        /** The devices count for the model. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $modelDeviceCount = null,
        /** The window score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $windowsScore = null,
        /** The user experience analytics work from anywhere model performance. */
        public ?string $workFromAnywhereScore = null
    ) {}
}
