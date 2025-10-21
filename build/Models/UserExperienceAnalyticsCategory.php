<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCategory
 */
class UserExperienceAnalyticsCategory
{
    /**
     * The insights for the category. Read-only.
     */
    private array $insights = [];

    /**
     * The user experience analytics category entity contains the scores and insights for the various metrics of a category.
     * @var string[]
     */
    private array $metricValues = [];


    public function getInsights(): array
    {
        return $this->insights;
    }

    public function setInsights(array $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMetricValues(): array
    {
        return $this->metricValues;
    }

    /**
     * @param string[] $metricValues
     */
    public function setMetricValues(array $metricValues): self
    {
        $this->metricValues = $metricValues;
        return $this;
    }

}
