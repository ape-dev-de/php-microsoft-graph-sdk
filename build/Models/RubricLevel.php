<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricLevel
 */
class RubricLevel
{
    public function __construct(
        /** The description of this rubric level. */
        public ?EducationItemBody $description = null,
        /** The name of this rubric level. */
        public ?string $displayName = null,
        /** Null if this is a no-points rubric; educationAssignmentPointsGradeType if it's a points rubric. */
        public ?EducationAssignmentGradeType $grading = null,
        /** The ID of this resource. */
        public ?string $levelId = null
    ) {}
}
