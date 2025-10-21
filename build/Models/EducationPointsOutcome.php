<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationPointsOutcome
 */
class EducationPointsOutcome
{
    public function __construct(
        /** The numeric grade the teacher has given the student for this assignment. */
        public ?string $points = null,
        /** A copy of the points property that is made when the grade is released to the student. */
        public ?string $publishedPoints = null
    ) {}
}
