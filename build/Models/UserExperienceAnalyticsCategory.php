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
     */
    private ?string $metricValues;

    public function getInsights(): array
    {
        return $this->insights;
    }

    public function setInsights(array $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

    public function getMetricValues(): ?string
    {
        return $this->metricValues;
    }

    public function setMetricValues(?string $metricValues): self
    {
        $this->metricValues = $metricValues;
        return $this;
    }

}
