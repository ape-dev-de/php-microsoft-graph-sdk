<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitationRedemptionIdentityProviderConfiguration
 */
class InvitationRedemptionIdentityProviderConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The fallback identity provider to be used in case no primary identity provider can be used for guest invitation redemption. Possible values are: defaultConfiguredIdp, emailOneTimePasscode, or microsoftAccount.
     * @var B2bIdentityProvidersType|\stdClass|null
     */
    public mixed $fallbackIdentityProvider = null;

    /** 
     * Collection of identity providers in priority order of preference to be used for guest invitation redemption. Possible values are: azureActiveDirectory, externalFederation, or socialIdentityProviders.
     * @var B2bIdentityProvidersType[]
     */
    public array $primaryIdentityProviderPrecedenceOrder = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['fallbackIdentityProvider'])) {
            $this->fallbackIdentityProvider = is_array($data['fallbackIdentityProvider']) ? new B2bIdentityProvidersType($data['fallbackIdentityProvider']) : $data['fallbackIdentityProvider'];
        }
        if (isset($data['primaryIdentityProviderPrecedenceOrder'])) {
            $this->primaryIdentityProviderPrecedenceOrder = $data['primaryIdentityProviderPrecedenceOrder'];
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
