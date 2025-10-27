<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereModelPerformance
 */
class UserExperienceAnalyticsWorkFromAnywhereModelPerformance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The cloud identity score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cloudIdentityScore = null;

    /** 
     * The cloud management score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cloudManagementScore = null;

    /** 
     * The cloud provisioning score of the device model.  Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $cloudProvisioningScore = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $manufacturer = null;

    /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $model = null;

    /** The devices count for the model. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $modelDeviceCount = null;

    /** 
     * The window score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $windowsScore = null;

    /** 
     * The work from anywhere score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $workFromAnywhereScore = null;


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
        if (isset($data['cloudIdentityScore'])) {
            $this->cloudIdentityScore = is_numeric($data['cloudIdentityScore']) ? (float)$data['cloudIdentityScore'] : $data['cloudIdentityScore'];
        }
        if (isset($data['cloudManagementScore'])) {
            $this->cloudManagementScore = is_numeric($data['cloudManagementScore']) ? (float)$data['cloudManagementScore'] : $data['cloudManagementScore'];
        }
        if (isset($data['cloudProvisioningScore'])) {
            $this->cloudProvisioningScore = is_numeric($data['cloudProvisioningScore']) ? (float)$data['cloudProvisioningScore'] : $data['cloudProvisioningScore'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = is_array($data['healthStatus']) ? new UserExperienceAnalyticsHealthState($data['healthStatus']) : $data['healthStatus'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['modelDeviceCount'])) {
            $this->modelDeviceCount = is_numeric($data['modelDeviceCount']) ? (float)$data['modelDeviceCount'] : $data['modelDeviceCount'];
        }
        if (isset($data['windowsScore'])) {
            $this->windowsScore = is_numeric($data['windowsScore']) ? (float)$data['windowsScore'] : $data['windowsScore'];
        }
        if (isset($data['workFromAnywhereScore'])) {
            $this->workFromAnywhereScore = is_numeric($data['workFromAnywhereScore']) ? (float)$data['workFromAnywhereScore'] : $data['workFromAnywhereScore'];
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
