<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedbackOutcome
 */
class EducationFeedbackOutcome
{
    public function __construct(
        /** Teacher's written feedback to the student. */
        public ?string $feedback = null,
        /** A copy of the feedback property that is made when the grade is released to the student. */
        public ?string $publishedFeedback = null
    ) {}
}
