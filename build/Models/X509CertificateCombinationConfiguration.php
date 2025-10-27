<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateCombinationConfiguration
 */
class X509CertificateCombinationConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Which authentication method combinations this configuration applies to. Must be an allowedCombinations object, part of the authenticationStrengthPolicy. The only possible value for fido2combinationConfigurations is 'fido2'.
     * @var AuthenticationMethodModes[]
     */
    public array $appliesToCombinations = [];

    /** 
     * A list of allowed subject key identifier values.
     * @var string[]
     */
    public array $allowedIssuerSkis = [];

    /** 
     * A list of allowed policy OIDs.
     * @var string[]
     */
    public array $allowedPolicyOIDs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appliesToCombinations'])) {
            $this->appliesToCombinations = $data['appliesToCombinations'];
        }
        if (isset($data['allowedIssuerSkis'])) {
            $this->allowedIssuerSkis = $data['allowedIssuerSkis'];
        }
        if (isset($data['allowedPolicyOIDs'])) {
            $this->allowedPolicyOIDs = $data['allowedPolicyOIDs'];
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
