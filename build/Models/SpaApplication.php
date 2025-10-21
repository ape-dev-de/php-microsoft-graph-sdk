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
     * @var string[]
     */
    private array $redirectUris = [];


    /**
     * @return string[]
     */
    public function getRedirectUris(): array
    {
        return $this->redirectUris;
    }

    /**
     * @param string[] $redirectUris
     */
    public function setRedirectUris(array $redirectUris): self
    {
        $this->redirectUris = $redirectUris;
        return $this;
    }

}
