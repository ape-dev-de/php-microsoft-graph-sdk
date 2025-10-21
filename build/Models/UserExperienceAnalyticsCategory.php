<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCategory
 */
class UserExperienceAnalyticsCategory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The insights for the category. Read-only. */
        public array $insights = [],
        /** The metric values for the user experience analytics category. Read-only. */
        public array $metricValues = []
    ) {}
}
