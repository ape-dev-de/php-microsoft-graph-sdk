<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsScoreHistory
 */
class UserExperienceAnalyticsScoreHistory
{
    public function __construct(
        /** The user experience analytics device startup score history. */
        public ?\DateTimeInterface $startupDateTime = null
    ) {}
}
