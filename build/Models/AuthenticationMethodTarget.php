<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodTarget
 */
class AuthenticationMethodTarget
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Determines if the user is enforced to register the authentication method. */
        public ?bool $isRegistrationRequired = null,
        /**  */
        public ?string $targetType = null
    ) {}
}
