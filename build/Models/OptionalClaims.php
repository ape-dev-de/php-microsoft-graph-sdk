<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OptionalClaims
 */
class OptionalClaims
{
    /**
     * The optional claims returned in the JWT access token.
     */
    private array $accessToken = [];

    /**
     * The optional claims returned in the JWT ID token.
     */
    private array $idToken = [];

    /**
     * The optional claims returned in the SAML token.
     */
    private ?string $saml2Token;

    public function getAccessToken(): array
    {
        return $this->accessToken;
    }

    public function setAccessToken(array $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getIdToken(): array
    {
        return $this->idToken;
    }

    public function setIdToken(array $idToken): self
    {
        $this->idToken = $idToken;
        return $this;
    }

    public function getSaml2Token(): ?string
    {
        return $this->saml2Token;
    }

    public function setSaml2Token(?string $saml2Token): self
    {
        $this->saml2Token = $saml2Token;
        return $this;
    }

}
