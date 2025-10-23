<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceScores
 */
class UserExperienceAnalyticsDeviceScores
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $appReliabilityScore = null;

    /** Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $batteryHealthScore = null;

    /** The name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $deviceName = null;

    /** Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $endpointAnalyticsScore = null;

    /**  */
    public ?UserExperienceAnalyticsHealthState $healthStatus = null;

    /** The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only. */
    public ?string $manufacturer = null;

    /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
    public ?string $model = null;

    /** Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $startupPerformanceScore = null;

    /** Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    public ?string $workFromAnywhereScore = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appReliabilityScore'])) {
            $this->appReliabilityScore = $data['appReliabilityScore'];
        }
        if (isset($data['batteryHealthScore'])) {
            $this->batteryHealthScore = $data['batteryHealthScore'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['endpointAnalyticsScore'])) {
            $this->endpointAnalyticsScore = $data['endpointAnalyticsScore'];
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
        if (isset($data['startupPerformanceScore'])) {
            $this->startupPerformanceScore = $data['startupPerformanceScore'];
        }
        if (isset($data['workFromAnywhereScore'])) {
            $this->workFromAnywhereScore = $data['workFromAnywhereScore'];
        }
    }
}
