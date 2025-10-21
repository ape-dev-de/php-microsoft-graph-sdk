<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthRoot
 */
class AuthenticationStrengthRoot
{
    public function __construct(
        /**  */
        public array $combinations = [],
        /** Names and descriptions of all valid authentication method modes in the system. */
        public array $authenticationMethodModes = [],
        /** @var string[] A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies. */
        public array $policies = []
    ) {}
}
