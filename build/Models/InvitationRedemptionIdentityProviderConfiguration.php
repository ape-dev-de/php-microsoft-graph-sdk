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
     */
    private ?string $fallbackIdentityProvider;

    /**
     * Collection of identity providers in priority order of preference to be used for guest invitation redemption. Possible values are: azureActiveDirectory, externalFederation, or socialIdentityProviders.
     */
    private ?string $primaryIdentityProviderPrecedenceOrder;

    public function getFallbackIdentityProvider(): ?string
    {
        return $this->fallbackIdentityProvider;
    }

    public function setFallbackIdentityProvider(?string $fallbackIdentityProvider): self
    {
        $this->fallbackIdentityProvider = $fallbackIdentityProvider;
        return $this;
    }

    public function getPrimaryIdentityProviderPrecedenceOrder(): ?string
    {
        return $this->primaryIdentityProviderPrecedenceOrder;
    }

    public function setPrimaryIdentityProviderPrecedenceOrder(?string $primaryIdentityProviderPrecedenceOrder): self
    {
        $this->primaryIdentityProviderPrecedenceOrder = $primaryIdentityProviderPrecedenceOrder;
        return $this;
    }

}
