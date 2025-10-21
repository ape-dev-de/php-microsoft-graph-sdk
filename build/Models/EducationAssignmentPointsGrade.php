<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentPointsGrade
 */
class EducationAssignmentPointsGrade
{
    public function __construct(
        /** User who did the grading. */
        public ?IdentitySet $gradedBy = null,
        /** Moment in time when the grade was applied to this submission object. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $gradedDateTime = null,
        /** Number of points a teacher is giving this submission object. */
        public ?string $points = null
    ) {}
}
