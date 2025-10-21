<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AllowedValue
 */
class AllowedValue
{
    public function __construct(
        /** Indicates whether the predefined value is active or deactivated. If set to false, this predefined value can''t be assigned to any other supported directory objects. */
        public ?string $isActive = null
    ) {}
}
