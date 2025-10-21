<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Authentication;

/**
 * Interface for authentication providers
 */
interface AuthenticationProvider
{
    /**
     * Get the access token for authentication
     *
     * @return string The access token
     */
    public function getAccessToken(): string;
}
