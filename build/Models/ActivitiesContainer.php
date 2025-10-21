<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivitiesContainer
 */
class ActivitiesContainer
{
    public function __construct(
        /** @var string[] Collection of activity logs related to content processing. */
        public array $contentActivities = []
    ) {}
}
