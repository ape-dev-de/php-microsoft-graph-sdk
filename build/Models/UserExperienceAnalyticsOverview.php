<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsOverview
 */
class UserExperienceAnalyticsOverview
{
    /**
     * The user experience analytics overview entity contains the overall score and the scores and insights of every metric of all categories.
     * @var string[]
     */
    private array $insights = [];


    /**
     * @return string[]
     */
    public function getInsights(): array
    {
        return $this->insights;
    }

    /**
     * @param string[] $insights
     */
    public function setInsights(array $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

}
