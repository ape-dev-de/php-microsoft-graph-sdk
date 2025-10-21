<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsOverview
 */
class UserExperienceAnalyticsOverview
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user experience analytics insights. Read-only. */
        public array $insights = []
    ) {}
}
