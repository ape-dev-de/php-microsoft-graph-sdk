<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SpaApplication
 */
class SpaApplication
{
    public function __construct(
        /** @var string[] Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent. */
        public array $redirectUris = []
    ) {}
}
