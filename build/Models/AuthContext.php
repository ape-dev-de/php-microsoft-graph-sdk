<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthContext
 */
class AuthContext
{
    public function __construct(
        /** Supported values are c1 through c99. */
        public ?string $authenticationContextValue = null
    ) {}
}
