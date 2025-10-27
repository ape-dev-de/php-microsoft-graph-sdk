<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of crashes for the app. Valid values -2147483648 to 2147483647 */
    public ?float $appCrashCount = null;

    /** The friendly name of the application. */
    public ?string $appDisplayName = null;

    /** The name of the application. */
    public ?string $appName = null;

    /** The publisher of the application. */
    public ?string $appPublisher = null;

    /** The version of the application. */
    public ?string $appVersion = null;

    /** The total number of devices that have reported one or more application crashes for this application and version. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $deviceCountWithCrashes = null;

    /** When TRUE, indicates the version of application is the latest version for that application that is in use. When FALSE, indicates the version is not the latest version. FALSE by default. Supports: $select, $OrderBy. */
    public ?bool $isLatestUsedVersion = null;

    /** When TRUE, indicates the version of application is the most used version for that application. When FALSE, indicates the version is not the most used version. FALSE by default. Supports: $select, $OrderBy. Read-only. */
    public ?bool $isMostUsedVersion = null;


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
        if (isset($data['appVersion'])) {
            $this->appVersion = $data['appVersion'];
        }
        if (isset($data['deviceCountWithCrashes'])) {
            $this->deviceCountWithCrashes = $data['deviceCountWithCrashes'];
        }
        if (isset($data['isLatestUsedVersion'])) {
            $this->isLatestUsedVersion = $data['isLatestUsedVersion'];
        }
        if (isset($data['isMostUsedVersion'])) {
            $this->isMostUsedVersion = $data['isMostUsedVersion'];
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
