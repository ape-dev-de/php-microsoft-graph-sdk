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
    /**
     * Available select fields for RegistrationEnforcement
     */
    public const FIELD_AUTHENTICATION_METHODS_REGISTRATION_CAMPAIGN = 'authenticationMethodsRegistrationCampaign';

    /**
     * Select specific RegistrationEnforcement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
