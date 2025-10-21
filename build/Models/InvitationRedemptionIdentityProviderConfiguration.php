<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitationRedemptionIdentityProviderConfiguration
 */
class InvitationRedemptionIdentityProviderConfiguration
{
    public function __construct(
        /** The fallback identity provider to be used in case no primary identity provider can be used for guest invitation redemption. Possible values are: defaultConfiguredIdp, emailOneTimePasscode, or microsoftAccount. */
        public ?string $fallbackIdentityProvider = null,
        /** Collection of identity providers in priority order of preference to be used for guest invitation redemption. Possible values are: azureActiveDirectory, externalFederation, or socialIdentityProviders. */
        public array $primaryIdentityProviderPrecedenceOrder = []
    ) {}
}
