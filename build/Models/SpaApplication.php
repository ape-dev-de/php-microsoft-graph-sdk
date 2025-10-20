<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SpaApplication
 */
class SpaApplication
{
    /**
     * Specifies the URLs where user tokens are sent for sign-in, or the redirect URIs where OAuth 2.0 authorization codes and access tokens are sent.
     */
    private ?string $redirectUris;

    public function getRedirectUris(): ?string
    {
        return $this->redirectUris;
    }

    public function setRedirectUris(?string $redirectUris): self
    {
        $this->redirectUris = $redirectUris;
        return $this;
    }

}
