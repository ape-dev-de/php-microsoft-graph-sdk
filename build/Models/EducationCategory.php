<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationCategory
 */
class EducationCategory
{
    public function __construct(
        /** Unique identifier for the category. */
        public ?string $displayName = null
    ) {}
}
