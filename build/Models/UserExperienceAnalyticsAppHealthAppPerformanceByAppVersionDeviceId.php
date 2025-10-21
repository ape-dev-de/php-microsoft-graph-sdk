<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
{
    public function __construct(
        /** The number of crashes for the app. Valid values -2147483648 to 2147483647 */
        public ?float $appCrashCount = null,
        /** The friendly name of the application. */
        public ?string $appDisplayName = null,
        /** The name of the application. */
        public ?string $appName = null,
        /** The publisher of the application. */
        public ?string $appPublisher = null,
        /** The version of the application. */
        public ?string $appVersion = null,
        /** The name of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceDisplayName = null,
        /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $deviceId = null,
        /** The user experience analytics application performance entity contains application performance by application version device id. */
        public ?\DateTimeInterface $processedDateTime = null
    ) {}
}
