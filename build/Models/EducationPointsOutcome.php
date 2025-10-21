<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationPointsOutcome
 */
class EducationPointsOutcome
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The individual who updated the resource. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The moment in time when the resource was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The numeric grade the teacher has given the student for this assignment. */
        public ?EducationAssignmentPointsGrade $points = null,
        /** A copy of the points property that is made when the grade is released to the student. */
        public ?EducationAssignmentPointsGrade $publishedPoints = null
    ) {}
}
