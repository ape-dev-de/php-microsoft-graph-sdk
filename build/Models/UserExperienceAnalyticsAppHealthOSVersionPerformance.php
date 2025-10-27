<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthOSVersionPerformance
 */
class UserExperienceAnalyticsAppHealthOSVersionPerformance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of active devices for the OS version. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $activeDeviceCount = null;

    /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $meanTimeToFailureInMinutes = null;

    /** The OS build number installed on the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $osBuildNumber = null;

    /** The OS version installed on the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $osVersion = null;

    /** 
     * The application health score of the OS version. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $osVersionAppHealthScore = null;


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
        if (isset($data['meanTimeToFailureInMinutes'])) {
            $this->meanTimeToFailureInMinutes = is_numeric($data['meanTimeToFailureInMinutes']) ? (float)$data['meanTimeToFailureInMinutes'] : $data['meanTimeToFailureInMinutes'];
        }
        if (isset($data['osBuildNumber'])) {
            $this->osBuildNumber = $data['osBuildNumber'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
        if (isset($data['osVersionAppHealthScore'])) {
            $this->osVersionAppHealthScore = is_numeric($data['osVersionAppHealthScore']) ? (float)$data['osVersionAppHealthScore'] : $data['osVersionAppHealthScore'];
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
