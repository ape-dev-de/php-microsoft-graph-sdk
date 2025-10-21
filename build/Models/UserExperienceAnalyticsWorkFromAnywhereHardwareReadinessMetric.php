<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
{
    public function __construct(
        /** The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $osCheckFailedPercentage = null,
        /** The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $processor64BitCheckFailedPercentage = null,
        /** The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $processorCoreCountCheckFailedPercentage = null,
        /** The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $processorFamilyCheckFailedPercentage = null,
        /** The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $processorSpeedCheckFailedPercentage = null,
        /** The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $ramCheckFailedPercentage = null,
        /** The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $secureBootCheckFailedPercentage = null,
        /** The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $storageCheckFailedPercentage = null,
        /** The count of total devices in an organization. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $totalDeviceCount = null,
        /** The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $tpmCheckFailedPercentage = null,
        /** The user experience analytics hardware readiness entity contains account level information about hardware blockers for windows upgrade. */
        public ?string $upgradeEligibleDeviceCount = null
    ) {}
}
