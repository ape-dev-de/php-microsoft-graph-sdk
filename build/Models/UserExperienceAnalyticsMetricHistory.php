<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsMetricHistory
 */
class UserExperienceAnalyticsMetricHistory
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Intune device id of the device. */
    public ?string $deviceId = null;

    /** The metric date time. The value cannot be modified and is automatically populated when the metric is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. */
    public ?\DateTimeInterface $metricDateTime = null;

    /** The user experience analytics metric type. */
    public ?string $metricType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['metricDateTime'])) {
            $this->metricDateTime = is_string($data['metricDateTime']) ? new \DateTimeImmutable($data['metricDateTime']) : $data['metricDateTime'];
        }
        if (isset($data['metricType'])) {
            $this->metricType = $data['metricType'];
        }
    }
}
