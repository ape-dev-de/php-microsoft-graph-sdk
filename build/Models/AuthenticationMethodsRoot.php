<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRoot
 */
class AuthenticationMethodsRoot
{
    public function __construct(
        /** @var string[] Represents the state of a user''s authentication methods, including which methods are registered and which features the user is registered and capable of (such as multifactor authentication, self-service password reset, and passwordless authentication). */
        public array $userRegistrationDetails = []
    ) {}
}
