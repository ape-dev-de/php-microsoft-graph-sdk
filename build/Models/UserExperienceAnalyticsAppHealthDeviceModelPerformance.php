<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthDeviceModelPerformance
 */
class UserExperienceAnalyticsAppHealthDeviceModelPerformance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of active devices for the model. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $activeDeviceCount = null;

    /** The manufacturer name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceManufacturer = null;

    /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceModel = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $meanTimeToFailureInMinutes = null;

    /** 
     * The application health score of the device model. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $modelAppHealthScore = null;


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
        if (isset($data['activeDeviceCount'])) {
            $this->activeDeviceCount = is_numeric($data['activeDeviceCount']) ? (float)$data['activeDeviceCount'] : $data['activeDeviceCount'];
        }
        if (isset($data['deviceManufacturer'])) {
            $this->deviceManufacturer = $data['deviceManufacturer'];
        }
        if (isset($data['deviceModel'])) {
            $this->deviceModel = $data['deviceModel'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = is_string($data['healthStatus']) ? UserExperienceAnalyticsHealthState::tryFrom($data['healthStatus']) : $data['healthStatus'];
        }
        if (isset($data['meanTimeToFailureInMinutes'])) {
            $this->meanTimeToFailureInMinutes = is_numeric($data['meanTimeToFailureInMinutes']) ? (float)$data['meanTimeToFailureInMinutes'] : $data['meanTimeToFailureInMinutes'];
        }
        if (isset($data['modelAppHealthScore'])) {
            $this->modelAppHealthScore = is_numeric($data['modelAppHealthScore']) ? (float)$data['modelAppHealthScore'] : $data['modelAppHealthScore'];
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
