<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationGradingCategory
 */
class EducationGradingCategory
{
    public function __construct(
        /** The name of the grading category. */
        public ?string $displayName = null,
        /** The weight of the category; an integer between 0 and 100. */
        public ?string $percentageWeight = null
    ) {}
}
