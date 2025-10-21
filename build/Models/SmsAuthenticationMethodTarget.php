<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SmsAuthenticationMethodTarget
 */
class SmsAuthenticationMethodTarget
{
    public function __construct(
        /** Determines if users can use this authentication method to sign in to Microsoft Entra ID. true if users can use this method for primary authentication, otherwise false. */
        public ?string $isUsableForSignIn = null
    ) {}
}
