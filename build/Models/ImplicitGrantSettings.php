<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImplicitGrantSettings
 */
class ImplicitGrantSettings
{
    public function __construct(
        /** Specifies whether this web application can request an access token using the OAuth 2.0 implicit flow. */
        public ?bool $enableAccessTokenIssuance = null,
        /** Specifies whether this web application can request an ID token using the OAuth 2.0 implicit flow. */
        public ?bool $enableIdTokenIssuance = null
    ) {}
}
