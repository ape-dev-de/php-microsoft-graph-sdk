<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of devices where the application has been active. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $activeDeviceCount = null;

    /** The number of crashes for the application. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appCrashCount = null;

    /** The friendly name of the application. Possible values are: Outlook, Excel. Supports: $select, $OrderBy. Read-only. */
    public ?string $appDisplayName = null;

    /** The name of the application. Possible values are: outlook.exe, excel.exe. Supports: $select, $OrderBy. Read-only. */
    public ?string $appName = null;

    /** The publisher of the application. Supports: $select, $OrderBy. Read-only. */
    public ?string $appPublisher = null;

    /** The total usage time of the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $appUsageDuration = null;

    /** The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $meanTimeToFailureInMinutes = null;

    /** The OS build number of the application. Supports: $select, $OrderBy. Read-only. */
    public ?string $osBuildNumber = null;

    /** The OS version of the application. Supports: $select, $OrderBy. Read-only. */
    public ?string $osVersion = null;


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
            $this->activeDeviceCount = $data['activeDeviceCount'];
        }
        if (isset($data['appCrashCount'])) {
            $this->appCrashCount = $data['appCrashCount'];
        }
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
        }
        if (isset($data['appName'])) {
            $this->appName = $data['appName'];
        }
        if (isset($data['appPublisher'])) {
            $this->appPublisher = $data['appPublisher'];
        }
        if (isset($data['appUsageDuration'])) {
            $this->appUsageDuration = $data['appUsageDuration'];
        }
        if (isset($data['meanTimeToFailureInMinutes'])) {
            $this->meanTimeToFailureInMinutes = $data['meanTimeToFailureInMinutes'];
        }
        if (isset($data['osBuildNumber'])) {
            $this->osBuildNumber = $data['osBuildNumber'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
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
