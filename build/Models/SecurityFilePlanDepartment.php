<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDepartment
 */
class SecurityFilePlanDepartment
{
    public function __construct(
        /** Unique string that defines the name for the file plan descriptor associated with a particular retention label. */
        public ?string $displayName = null
    ) {}
}
