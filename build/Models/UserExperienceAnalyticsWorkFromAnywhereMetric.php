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
     * @var string[]
     */
    private array $metricDevices = [];


    /**
     * @return string[]
     */
    public function getMetricDevices(): array
    {
        return $this->metricDevices;
    }

    /**
     * @param string[] $metricDevices
     */
    public function setMetricDevices(array $metricDevices): self
    {
        $this->metricDevices = $metricDevices;
        return $this;
    }

}
