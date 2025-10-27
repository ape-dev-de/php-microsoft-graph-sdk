<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OptionalClaims
 */
class OptionalClaims
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The optional claims returned in the JWT access token.
     * @var OptionalClaim[]
     */
    public array $accessToken = [];

    /** 
     * The optional claims returned in the JWT ID token.
     * @var OptionalClaim[]
     */
    public array $idToken = [];

    /** 
     * The optional claims returned in the SAML token.
     * @var OptionalClaim[]
     */
    public array $saml2Token = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accessToken'])) {
            $this->accessToken = $data['accessToken'];
        }
        if (isset($data['idToken'])) {
            $this->idToken = $data['idToken'];
        }
        if (isset($data['saml2Token'])) {
            $this->saml2Token = $data['saml2Token'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
