<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsBaseline
 */
class UserExperienceAnalyticsBaseline
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: ''2014-01-01T00:00:00Z''. Returned by default. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the baseline. */
        public ?string $displayName = null,
        /** When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default. */
        public ?bool $isBuiltIn = null,
        /** The scores and insights for the application health metrics. */
        public ?string $appHealthMetrics = null,
        /** The scores and insights for the battery health metrics. */
        public ?string $batteryHealthMetrics = null,
        /** The scores and insights for the best practices metrics. */
        public ?string $bestPracticesMetrics = null,
        /** The scores and insights for the device boot performance metrics. */
        public ?string $deviceBootPerformanceMetrics = null,
        /** The scores and insights for the reboot analytics metrics. */
        public ?string $rebootAnalyticsMetrics = null,
        /** The scores and insights for the resource performance metrics. */
        public ?string $resourcePerformanceMetrics = null,
        /** The user experience analytics baseline entity contains baseline values against which to compare the user experience analytics scores. */
        public ?string $workFromAnywhereMetrics = null
    ) {}
}
