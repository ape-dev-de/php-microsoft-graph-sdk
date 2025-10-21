<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditions
 */
class AuthenticationConditions
{
    public function __construct(
        /** Applications which trigger a custom authentication extension. */
        public ?string $applications = null
    ) {}
}
