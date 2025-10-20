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
     */
    private ?string $insights;

    public function getInsights(): ?string
    {
        return $this->insights;
    }

    public function setInsights(?string $insights): self
    {
        $this->insights = $insights;
        return $this;
    }

}
