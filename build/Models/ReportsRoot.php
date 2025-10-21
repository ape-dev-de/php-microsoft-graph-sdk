<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReportsRoot
 */
class ReportsRoot
{
    public function __construct(
        /** Details of submitted reading assignments. */
        public array $readingAssignmentSubmissions = [],
        /** @var string[] Details of check-in responses. */
        public array $reflectCheckInResponses = []
    ) {}
}
