<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OptionalClaims
 */
class OptionalClaims
{
    public function __construct(
        /** The optional claims returned in the JWT access token. */
        public array $accessToken = [],
        /** The optional claims returned in the JWT ID token. */
        public array $idToken = [],
        /** The optional claims returned in the SAML token. */
        public array $saml2Token = []
    ) {}
}
