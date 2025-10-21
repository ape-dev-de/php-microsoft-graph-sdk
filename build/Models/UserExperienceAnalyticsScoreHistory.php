<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsScoreHistory
 */
class UserExperienceAnalyticsScoreHistory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user experience analytics device startup score history. */
        public ?\DateTimeInterface $startupDateTime = null
    ) {}
}
