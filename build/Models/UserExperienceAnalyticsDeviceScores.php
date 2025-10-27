<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceScores
 */
class UserExperienceAnalyticsDeviceScores
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $appReliabilityScore = null;

    /** 
     * Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $batteryHealthScore = null;

    /** The name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceName = null;

    /** 
     * Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $endpointAnalyticsScore = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only. */
    public ?string $manufacturer = null;

    /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $model = null;

    /** 
     * Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $startupPerformanceScore = null;

    /** 
     * Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
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
        if (isset($data['appReliabilityScore'])) {
            $this->appReliabilityScore = is_numeric($data['appReliabilityScore']) ? (float)$data['appReliabilityScore'] : $data['appReliabilityScore'];
        }
        if (isset($data['batteryHealthScore'])) {
            $this->batteryHealthScore = is_numeric($data['batteryHealthScore']) ? (float)$data['batteryHealthScore'] : $data['batteryHealthScore'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['endpointAnalyticsScore'])) {
            $this->endpointAnalyticsScore = is_numeric($data['endpointAnalyticsScore']) ? (float)$data['endpointAnalyticsScore'] : $data['endpointAnalyticsScore'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = is_string($data['healthStatus']) ? UserExperienceAnalyticsHealthState::tryFrom($data['healthStatus']) : $data['healthStatus'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['startupPerformanceScore'])) {
            $this->startupPerformanceScore = is_numeric($data['startupPerformanceScore']) ? (float)$data['startupPerformanceScore'] : $data['startupPerformanceScore'];
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
