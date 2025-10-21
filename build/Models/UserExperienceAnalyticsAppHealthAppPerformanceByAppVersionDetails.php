<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
 */
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
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
        /** The total number of devices that have reported one or more application crashes for this application and version. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $deviceCountWithCrashes = null,
        /** When TRUE, indicates the version of application is the latest version for that application that is in use. When FALSE, indicates the version is not the latest version. FALSE by default. Supports: $select, $OrderBy. */
        public ?bool $isLatestUsedVersion = null,
        /** When TRUE, indicates the version of application is the most used version for that application. When FALSE, indicates the version is not the most used version. FALSE by default. Supports: $select, $OrderBy. Read-only. */
        public ?bool $isMostUsedVersion = null
    ) {}
}
