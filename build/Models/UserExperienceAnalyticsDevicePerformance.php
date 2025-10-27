<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDevicePerformance
 */
class UserExperienceAnalyticsDevicePerformance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Average (mean) number of Blue Screens per device in the last 30 days. Valid values 0 to 9999999
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $averageBlueScreens = null;

    /** 
     * Average (mean) number of Restarts per device in the last 30 days. Valid values 0 to 9999999
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $averageRestarts = null;

    /** Number of Blue Screens in the last 30 days. Valid values 0 to 9999999 */
    public ?float $blueScreenCount = null;

    /** The user experience analytics device boot score. */
    public ?float $bootScore = null;

    /** The user experience analytics device core boot time in milliseconds. */
    public ?float $coreBootTimeInMs = null;

    /** The user experience analytics device core login time in milliseconds. */
    public ?float $coreLoginTimeInMs = null;

    /** User experience analytics summarized device count. */
    public ?float $deviceCount = null;

    /** The user experience analytics device name. */
    public ?string $deviceName = null;

    /**  */
    public ?DiskType $diskType = null;

    /** The user experience analytics device group policy boot time in milliseconds. */
    public ?float $groupPolicyBootTimeInMs = null;

    /** The user experience analytics device group policy login time in milliseconds. */
    public ?float $groupPolicyLoginTimeInMs = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** The user experience analytics device login score. */
    public ?float $loginScore = null;

    /** The user experience analytics device manufacturer. */
    public ?string $manufacturer = null;

    /** The user experience analytics device model. */
    public ?string $model = null;

    /** 
     * The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $modelStartupPerformanceScore = null;

    /** The user experience analytics device Operating System version. */
    public ?string $operatingSystemVersion = null;

    /** The user experience analytics responsive desktop time in milliseconds. */
    public ?float $responsiveDesktopTimeInMs = null;

    /** Number of Restarts in the last 30 days. Valid values 0 to 9999999 */
    public ?float $restartCount = null;

    /** 
     * The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $startupPerformanceScore = null;


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
        if (isset($data['averageBlueScreens'])) {
            $this->averageBlueScreens = is_numeric($data['averageBlueScreens']) ? (float)$data['averageBlueScreens'] : $data['averageBlueScreens'];
        }
        if (isset($data['averageRestarts'])) {
            $this->averageRestarts = is_numeric($data['averageRestarts']) ? (float)$data['averageRestarts'] : $data['averageRestarts'];
        }
        if (isset($data['blueScreenCount'])) {
            $this->blueScreenCount = is_numeric($data['blueScreenCount']) ? (float)$data['blueScreenCount'] : $data['blueScreenCount'];
        }
        if (isset($data['bootScore'])) {
            $this->bootScore = is_numeric($data['bootScore']) ? (float)$data['bootScore'] : $data['bootScore'];
        }
        if (isset($data['coreBootTimeInMs'])) {
            $this->coreBootTimeInMs = is_numeric($data['coreBootTimeInMs']) ? (float)$data['coreBootTimeInMs'] : $data['coreBootTimeInMs'];
        }
        if (isset($data['coreLoginTimeInMs'])) {
            $this->coreLoginTimeInMs = is_numeric($data['coreLoginTimeInMs']) ? (float)$data['coreLoginTimeInMs'] : $data['coreLoginTimeInMs'];
        }
        if (isset($data['deviceCount'])) {
            $this->deviceCount = is_numeric($data['deviceCount']) ? (float)$data['deviceCount'] : $data['deviceCount'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['diskType'])) {
            $this->diskType = is_array($data['diskType']) ? new DiskType($data['diskType']) : $data['diskType'];
        }
        if (isset($data['groupPolicyBootTimeInMs'])) {
            $this->groupPolicyBootTimeInMs = is_numeric($data['groupPolicyBootTimeInMs']) ? (float)$data['groupPolicyBootTimeInMs'] : $data['groupPolicyBootTimeInMs'];
        }
        if (isset($data['groupPolicyLoginTimeInMs'])) {
            $this->groupPolicyLoginTimeInMs = is_numeric($data['groupPolicyLoginTimeInMs']) ? (float)$data['groupPolicyLoginTimeInMs'] : $data['groupPolicyLoginTimeInMs'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = is_array($data['healthStatus']) ? new UserExperienceAnalyticsHealthState($data['healthStatus']) : $data['healthStatus'];
        }
        if (isset($data['loginScore'])) {
            $this->loginScore = is_numeric($data['loginScore']) ? (float)$data['loginScore'] : $data['loginScore'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['modelStartupPerformanceScore'])) {
            $this->modelStartupPerformanceScore = is_numeric($data['modelStartupPerformanceScore']) ? (float)$data['modelStartupPerformanceScore'] : $data['modelStartupPerformanceScore'];
        }
        if (isset($data['operatingSystemVersion'])) {
            $this->operatingSystemVersion = $data['operatingSystemVersion'];
        }
        if (isset($data['responsiveDesktopTimeInMs'])) {
            $this->responsiveDesktopTimeInMs = is_numeric($data['responsiveDesktopTimeInMs']) ? (float)$data['responsiveDesktopTimeInMs'] : $data['responsiveDesktopTimeInMs'];
        }
        if (isset($data['restartCount'])) {
            $this->restartCount = is_numeric($data['restartCount']) ? (float)$data['restartCount'] : $data['restartCount'];
        }
        if (isset($data['startupPerformanceScore'])) {
            $this->startupPerformanceScore = is_numeric($data['startupPerformanceScore']) ? (float)$data['startupPerformanceScore'] : $data['startupPerformanceScore'];
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
