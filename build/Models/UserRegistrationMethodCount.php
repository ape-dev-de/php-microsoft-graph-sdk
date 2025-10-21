<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodCount
 */
class UserRegistrationMethodCount
{
    public function __construct(
        /** Name of the authentication method. */
        public ?string $authenticationMethod = null,
        /** Number of users registered. */
        public ?string $userCount = null
    ) {}
}
