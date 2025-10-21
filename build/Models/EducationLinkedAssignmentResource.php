<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationLinkedAssignmentResource
 */
class EducationLinkedAssignmentResource
{
    public function __construct(
        /** URL of the actual assignment. */
        public ?string $url = null
    ) {}
}
