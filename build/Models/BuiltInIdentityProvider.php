<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BuiltInIdentityProvider
 */
class BuiltInIdentityProvider
{
    public function __construct(
        /** The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required. */
        public ?string $identityProviderType = null
    ) {}
}
