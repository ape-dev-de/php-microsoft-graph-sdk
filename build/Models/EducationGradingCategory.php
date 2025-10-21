<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationGradingCategory
 */
class EducationGradingCategory
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the grading category. */
        public ?string $displayName = null,
        /** The weight of the category; an integer between 0 and 100. */
        public ?float $percentageWeight = null
    ) {}
}
