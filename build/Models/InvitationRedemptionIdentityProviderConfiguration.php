<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitationRedemptionIdentityProviderConfiguration
 */
class InvitationRedemptionIdentityProviderConfiguration
{
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
        if (isset($data['fallbackIdentityProvider'])) {
            $this->fallbackIdentityProvider = $data['fallbackIdentityProvider'];
        }
        if (isset($data['primaryIdentityProviderPrecedenceOrder'])) {
            $this->primaryIdentityProviderPrecedenceOrder = $data['primaryIdentityProviderPrecedenceOrder'];
        }
    }
}
