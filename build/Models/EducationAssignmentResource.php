<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentResource
 */
class EducationAssignmentResource
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates whether this resource should be copied to each student submission for modification and submission. Required */
        public ?bool $distributeForStudentWork = null,
        /** Resource object that has been associated with this assignment. */
        public ?EducationResource $resource = null
    ) {}
}
