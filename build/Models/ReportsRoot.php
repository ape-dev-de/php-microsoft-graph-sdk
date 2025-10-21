<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportsRoot
 */
class ReportsRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Details of submitted reading assignments. */
        public array $readingAssignmentSubmissions = [],
        /** Details of check-in responses. */
        public array $reflectCheckInResponses = []
    ) {}
}
