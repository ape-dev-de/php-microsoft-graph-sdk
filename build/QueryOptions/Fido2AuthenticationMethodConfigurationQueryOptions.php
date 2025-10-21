<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2AuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - isAttestationEnforced
 * - isSelfServiceRegistrationAllowed
 * - keyRestrictions
 * - includeTargets
 */
class Fido2AuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Fido2AuthenticationMethodConfiguration
     */
    public const FIELD_IS_ATTESTATION_ENFORCED = 'isAttestationEnforced';
    public const FIELD_IS_SELF_SERVICE_REGISTRATION_ALLOWED = 'isSelfServiceRegistrationAllowed';
    public const FIELD_KEY_RESTRICTIONS = 'keyRestrictions';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific Fido2AuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
