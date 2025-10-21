<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanAppliedCategory
 */
class SecurityFilePlanAppliedCategory
{
    public function __construct(
        /** Unique string that defines the name for the file plan descriptor associated with a particular retention label. */
        public ?string $displayName = null,
        /** Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label. */
        public ?string $subcategory = null
    ) {}
}
