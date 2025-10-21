<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGradeType
 */
class EducationAssignmentPointsGradeType
{
    public function __construct(
        /** Max points possible for this assignment. */
        public ?string $maxPoints = null
    ) {}
}
