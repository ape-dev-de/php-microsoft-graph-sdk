<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGrade
 */
class EducationAssignmentPointsGrade
{
    public function __construct(
        /** Number of points a teacher is giving this submission object. */
        public ?string $points = null
    ) {}
}
