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
     * @var string[]
     */
    private array $saml2Token = [];


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

    /**
     * @return string[]
     */
    public function getSaml2Token(): array
    {
        return $this->saml2Token;
    }

    /**
     * @param string[] $saml2Token
     */
    public function setSaml2Token(array $saml2Token): self
    {
        $this->saml2Token = $saml2Token;
        return $this;
    }

}
