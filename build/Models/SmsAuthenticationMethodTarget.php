<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SmsAuthenticationMethodTarget
 */
class SmsAuthenticationMethodTarget
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Determines if the user is enforced to register the authentication method. */
        public ?bool $isRegistrationRequired = null,
        /**  */
        public ?AuthenticationMethodTargetType $targetType = null,
        /** Determines if users can use this authentication method to sign in to Microsoft Entra ID. true if users can use this method for primary authentication, otherwise false. */
        public ?bool $isUsableForSignIn = null
    ) {}
}
