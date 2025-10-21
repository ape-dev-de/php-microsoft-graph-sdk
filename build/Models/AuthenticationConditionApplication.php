<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditionApplication
 */
class AuthenticationConditionApplication
{
    public function __construct(
        /** The identifier for an application corresponding to a condition which will trigger an authenticationEventListener. */
        public ?string $appId = null
    ) {}
}
