<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthUsage
 */
class AuthenticationStrengthUsage
{
    public function __construct(
        /**  */
        public array $mfa = [],
        /** @var string[]  */
        public array $none = []
    ) {}
}
