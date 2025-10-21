<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

/**
 * Simple bearer token authentication provider
 */
class BearerTokenAuthenticationProvider implements AuthenticationProvider
{
    private string $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function getAccessToken(): string
    {
        return $this->token;
    }
}
