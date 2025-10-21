<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsOverview
 */
class UserExperienceAnalyticsOverview
{
    public function __construct(
        /** @var string[] The user experience analytics overview entity contains the overall score and the scores and insights of every metric of all categories. */
        public array $insights = []
    ) {}
}
