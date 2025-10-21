<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivitiesContainer
 */
class ActivitiesContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Collection of activity logs related to content processing. */
        public array $contentActivities = []
    ) {}
}
