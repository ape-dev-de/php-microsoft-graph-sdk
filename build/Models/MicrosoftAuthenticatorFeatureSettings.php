<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorFeatureSettings
 */
class MicrosoftAuthenticatorFeatureSettings
{
    public function __construct(
        /** Determines whether the user's Authenticator app shows them the client app they're signing into. */
        public ?string $displayAppInformationRequiredState = null,
        /** Determines whether the user's Authenticator app shows them the geographic location of where the authentication request originated from. */
        public ?string $displayLocationInformationRequiredState = null
    ) {}
}
