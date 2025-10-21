<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityApiConnector
 */
class IdentityApiConnector
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported. */
        public ?ApiAuthenticationConfigurationBase $authenticationConfiguration = null,
        /** The name of the API connector. */
        public ?string $displayName = null,
        /** The URL of the API endpoint to call. */
        public ?string $targetUrl = null
    ) {}
}
