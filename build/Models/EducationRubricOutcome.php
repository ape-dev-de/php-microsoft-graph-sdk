<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubricOutcome
 */
class EducationRubricOutcome
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The individual who updated the resource. */
        public ?string $lastModifiedBy = null,
        /** The moment in time when the resource was last modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** A copy of the rubricQualityFeedback property that is made when the grade is released to the student. */
        public array $publishedRubricQualityFeedback = [],
        /** A copy of the rubricQualitySelectedLevels property that is made when the grade is released to the student. */
        public array $publishedRubricQualitySelectedLevels = [],
        /** A collection of specific feedback for each quality of this rubric. */
        public array $rubricQualityFeedback = [],
        /** @var string[] The level that the teacher has selected for each quality while grading this assignment. */
        public array $rubricQualitySelectedLevels = []
    ) {}
}
