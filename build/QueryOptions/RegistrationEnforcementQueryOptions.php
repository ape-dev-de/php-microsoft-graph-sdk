<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RegistrationEnforcement resources
 *
 * Available select fields:
 * - authenticationMethodsRegistrationCampaign
 */
class RegistrationEnforcementQueryOptions extends QueryOptions
{
    public const FIELD_AUTHENTICATION_METHODS_REGISTRATION_CAMPAIGN = 'authenticationMethodsRegistrationCampaign';

    /**
     * Select specific RegistrationEnforcement properties
     * 
     * @param array<string> $select Use RegistrationEnforcementQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
