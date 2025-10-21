<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionResource
 */
class EducationSubmissionResource
{
    public function __construct(
        /** Pointer to the assignment from which the resource was copied, and if null, the student uploaded the resource. */
        public ?string $assignmentResourceUrl = null,
        /** Resource object. */
        public ?string $resource = null
    ) {}
}
