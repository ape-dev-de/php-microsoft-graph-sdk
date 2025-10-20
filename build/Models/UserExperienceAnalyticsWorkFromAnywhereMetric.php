<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereMetric
{
    /**
     * The user experience analytics metric for work from anywhere report.
     */
    private ?string $metricDevices;

    public function getMetricDevices(): ?string
    {
        return $this->metricDevices;
    }

    public function setMetricDevices(?string $metricDevices): self
    {
        $this->metricDevices = $metricDevices;
        return $this;
    }

}
