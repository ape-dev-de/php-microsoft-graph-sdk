<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $osCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $processor64BitCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $processorCoreCountCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $processorFamilyCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $processorSpeedCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $ramCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $secureBootCheckFailedPercentage = null;

    /** 
     * The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $storageCheckFailedPercentage = null;

    /** The count of total devices in an organization. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $totalDeviceCount = null;

    /** 
     * The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $tpmCheckFailedPercentage = null;

    /** The count of devices in an organization eligible for windows upgrade. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $upgradeEligibleDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['osCheckFailedPercentage'])) {
            $this->osCheckFailedPercentage = is_numeric($data['osCheckFailedPercentage']) ? (float)$data['osCheckFailedPercentage'] : $data['osCheckFailedPercentage'];
        }
        if (isset($data['processor64BitCheckFailedPercentage'])) {
            $this->processor64BitCheckFailedPercentage = is_numeric($data['processor64BitCheckFailedPercentage']) ? (float)$data['processor64BitCheckFailedPercentage'] : $data['processor64BitCheckFailedPercentage'];
        }
        if (isset($data['processorCoreCountCheckFailedPercentage'])) {
            $this->processorCoreCountCheckFailedPercentage = is_numeric($data['processorCoreCountCheckFailedPercentage']) ? (float)$data['processorCoreCountCheckFailedPercentage'] : $data['processorCoreCountCheckFailedPercentage'];
        }
        if (isset($data['processorFamilyCheckFailedPercentage'])) {
            $this->processorFamilyCheckFailedPercentage = is_numeric($data['processorFamilyCheckFailedPercentage']) ? (float)$data['processorFamilyCheckFailedPercentage'] : $data['processorFamilyCheckFailedPercentage'];
        }
        if (isset($data['processorSpeedCheckFailedPercentage'])) {
            $this->processorSpeedCheckFailedPercentage = is_numeric($data['processorSpeedCheckFailedPercentage']) ? (float)$data['processorSpeedCheckFailedPercentage'] : $data['processorSpeedCheckFailedPercentage'];
        }
        if (isset($data['ramCheckFailedPercentage'])) {
            $this->ramCheckFailedPercentage = is_numeric($data['ramCheckFailedPercentage']) ? (float)$data['ramCheckFailedPercentage'] : $data['ramCheckFailedPercentage'];
        }
        if (isset($data['secureBootCheckFailedPercentage'])) {
            $this->secureBootCheckFailedPercentage = is_numeric($data['secureBootCheckFailedPercentage']) ? (float)$data['secureBootCheckFailedPercentage'] : $data['secureBootCheckFailedPercentage'];
        }
        if (isset($data['storageCheckFailedPercentage'])) {
            $this->storageCheckFailedPercentage = is_numeric($data['storageCheckFailedPercentage']) ? (float)$data['storageCheckFailedPercentage'] : $data['storageCheckFailedPercentage'];
        }
        if (isset($data['totalDeviceCount'])) {
            $this->totalDeviceCount = is_numeric($data['totalDeviceCount']) ? (float)$data['totalDeviceCount'] : $data['totalDeviceCount'];
        }
        if (isset($data['tpmCheckFailedPercentage'])) {
            $this->tpmCheckFailedPercentage = is_numeric($data['tpmCheckFailedPercentage']) ? (float)$data['tpmCheckFailedPercentage'] : $data['tpmCheckFailedPercentage'];
        }
        if (isset($data['upgradeEligibleDeviceCount'])) {
            $this->upgradeEligibleDeviceCount = is_numeric($data['upgradeEligibleDeviceCount']) ? (float)$data['upgradeEligibleDeviceCount'] : $data['upgradeEligibleDeviceCount'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
