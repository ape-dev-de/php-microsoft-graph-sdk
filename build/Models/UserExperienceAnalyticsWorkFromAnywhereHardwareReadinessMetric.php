<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $osCheckFailedPercentage = null;

    /** The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $processor64BitCheckFailedPercentage = null;

    /** The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $processorCoreCountCheckFailedPercentage = null;

    /** The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $processorFamilyCheckFailedPercentage = null;

    /** The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $processorSpeedCheckFailedPercentage = null;

    /** The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $ramCheckFailedPercentage = null;

    /** The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $secureBootCheckFailedPercentage = null;

    /** The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $storageCheckFailedPercentage = null;

    /** The count of total devices in an organization. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $totalDeviceCount = null;

    /** The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $tpmCheckFailedPercentage = null;

    /** The count of devices in an organization eligible for windows upgrade. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $upgradeEligibleDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['osCheckFailedPercentage'])) {
            $this->osCheckFailedPercentage = $data['osCheckFailedPercentage'];
        }
        if (isset($data['processor64BitCheckFailedPercentage'])) {
            $this->processor64BitCheckFailedPercentage = $data['processor64BitCheckFailedPercentage'];
        }
        if (isset($data['processorCoreCountCheckFailedPercentage'])) {
            $this->processorCoreCountCheckFailedPercentage = $data['processorCoreCountCheckFailedPercentage'];
        }
        if (isset($data['processorFamilyCheckFailedPercentage'])) {
            $this->processorFamilyCheckFailedPercentage = $data['processorFamilyCheckFailedPercentage'];
        }
        if (isset($data['processorSpeedCheckFailedPercentage'])) {
            $this->processorSpeedCheckFailedPercentage = $data['processorSpeedCheckFailedPercentage'];
        }
        if (isset($data['ramCheckFailedPercentage'])) {
            $this->ramCheckFailedPercentage = $data['ramCheckFailedPercentage'];
        }
        if (isset($data['secureBootCheckFailedPercentage'])) {
            $this->secureBootCheckFailedPercentage = $data['secureBootCheckFailedPercentage'];
        }
        if (isset($data['storageCheckFailedPercentage'])) {
            $this->storageCheckFailedPercentage = $data['storageCheckFailedPercentage'];
        }
        if (isset($data['totalDeviceCount'])) {
            $this->totalDeviceCount = $data['totalDeviceCount'];
        }
        if (isset($data['tpmCheckFailedPercentage'])) {
            $this->tpmCheckFailedPercentage = $data['tpmCheckFailedPercentage'];
        }
        if (isset($data['upgradeEligibleDeviceCount'])) {
            $this->upgradeEligibleDeviceCount = $data['upgradeEligibleDeviceCount'];
        }
    }
}
