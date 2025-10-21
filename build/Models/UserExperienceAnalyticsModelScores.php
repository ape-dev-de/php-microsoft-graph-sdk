<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsModelScores
 */
class UserExperienceAnalyticsModelScores
{
    public function __construct(
        /** Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $appReliabilityScore = null,
        /** Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $batteryHealthScore = null,
        /** Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $endpointAnalyticsScore = null,
        /**  */
        public ?string $healthStatus = null,
        /** The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only. */
        public ?string $manufacturer = null,
        /** The model name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $model = null,
        /** Indicates unique devices count of given model in a consolidated report. Supports: $select, $OrderBy. Read-only. Valid values -9.22337203685478E+18 to 9.22337203685478E+18 */
        public ?float $modelDeviceCount = null,
        /** Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
        public ?string $startupPerformanceScore = null,
        /** The user experience analytics model scores entity consolidates the various Endpoint Analytics scores. */
        public ?string $workFromAnywhereScore = null
    ) {}
}
