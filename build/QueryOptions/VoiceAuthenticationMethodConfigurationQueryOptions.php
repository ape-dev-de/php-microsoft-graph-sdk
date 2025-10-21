<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VoiceAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - isOfficePhoneAllowed
 * - includeTargets
 */
class VoiceAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VoiceAuthenticationMethodConfiguration
     */
    public const FIELD_IS_OFFICE_PHONE_ALLOWED = 'isOfficePhoneAllowed';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific VoiceAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
