<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubric
 */
class EducationRubric
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The user who created this resource. */
        public ?IdentitySet $createdBy = null,
        /** The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The description of this rubric. */
        public ?EducationItemBody $description = null,
        /** The name of this rubric. */
        public ?string $displayName = null,
        /** The grading type of this rubric. You can use null for a no-points rubric or educationAssignmentPointsGradeType for a points rubric. */
        public ?EducationAssignmentGradeType $grading = null,
        /** The last user to modify the resource. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Moment in time when the resource was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The collection of levels making up this rubric. */
        public array $levels = [],
        /** The collection of qualities making up this rubric. */
        public array $qualities = []
    ) {}
}
