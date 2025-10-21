<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRubricOutcome
 */
class EducationRubricOutcome
{
    public function __construct(
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
