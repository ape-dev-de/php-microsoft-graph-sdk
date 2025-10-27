<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthApplicationPerformance
 */
class UserExperienceAnalyticsAppHealthApplicationPerformance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The health score of the application. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $activeDeviceCount = null;

    /** The number of crashes for the application. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appCrashCount = null;

    /** The friendly name of the application. Possible values are: Outlook, Excel. Supports: $select, $OrderBy. Read-only. */
    public ?string $appDisplayName = null;

    /** The number of hangs for the application. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appHangCount = null;

    /** 
     * The health score of the application. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $appHealthScore = null;

    /** The name of the application. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only. */
    public ?string $appName = null;

    /** The publisher of the application. Supports: $select, $OrderBy. Read-only. */
    public ?string $appPublisher = null;

    /** The total usage time of the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appUsageDuration = null;

    /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $meanTimeToFailureInMinutes = null;


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
        if (isset($data['appCrashCount'])) {
            $this->appCrashCount = is_numeric($data['appCrashCount']) ? (float)$data['appCrashCount'] : $data['appCrashCount'];
        }
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
        }
        if (isset($data['appHangCount'])) {
            $this->appHangCount = is_numeric($data['appHangCount']) ? (float)$data['appHangCount'] : $data['appHangCount'];
        }
        if (isset($data['appHealthScore'])) {
            $this->appHealthScore = is_numeric($data['appHealthScore']) ? (float)$data['appHealthScore'] : $data['appHealthScore'];
        }
        if (isset($data['appName'])) {
            $this->appName = $data['appName'];
        }
        if (isset($data['appPublisher'])) {
            $this->appPublisher = $data['appPublisher'];
        }
        if (isset($data['appUsageDuration'])) {
            $this->appUsageDuration = is_numeric($data['appUsageDuration']) ? (float)$data['appUsageDuration'] : $data['appUsageDuration'];
        }
        if (isset($data['meanTimeToFailureInMinutes'])) {
            $this->meanTimeToFailureInMinutes = is_numeric($data['meanTimeToFailureInMinutes']) ? (float)$data['meanTimeToFailureInMinutes'] : $data['meanTimeToFailureInMinutes'];
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
