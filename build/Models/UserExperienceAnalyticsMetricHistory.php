<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsMetricHistory
 */
class UserExperienceAnalyticsMetricHistory
{
    public function __construct(
        /** The Intune device id of the device. */
        public ?string $deviceId = null,
        /** The metric date time. The value cannot be modified and is automatically populated when the metric is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: ''2014-01-01T00:00:00Z''. Returned by default. */
        public ?\DateTimeInterface $metricDateTime = null,
        /** The user experience analytics metric history. */
        public ?string $metricType = null
    ) {}
}
