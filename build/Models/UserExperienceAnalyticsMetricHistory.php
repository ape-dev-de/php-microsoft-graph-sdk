<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsMetricHistory
 */
class UserExperienceAnalyticsMetricHistory
{
    /**
     * The Intune device id of the device.
     */
    private ?string $deviceId;

    /**
     * The metric date time. The value cannot be modified and is automatically populated when the metric is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: ''2014-01-01T00:00:00Z''. Returned by default.
     */
    private ?\DateTimeInterface $metricDateTime;

    /**
     * The user experience analytics metric history.
     */
    private ?string $metricType;

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getMetricDateTime(): ?\DateTimeInterface
    {
        return $this->metricDateTime;
    }

    public function setMetricDateTime(?\DateTimeInterface $metricDateTime): self
    {
        $this->metricDateTime = $metricDateTime;
        return $this;
    }

    public function getMetricType(): ?string
    {
        return $this->metricType;
    }

    public function setMetricType(?string $metricType): self
    {
        $this->metricType = $metricType;
        return $this;
    }

}
