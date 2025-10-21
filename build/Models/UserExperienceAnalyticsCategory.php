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
        /** @var string[] The user experience analytics category entity contains the scores and insights for the various metrics of a category. */
        public array $metricValues = []
    ) {}
}
