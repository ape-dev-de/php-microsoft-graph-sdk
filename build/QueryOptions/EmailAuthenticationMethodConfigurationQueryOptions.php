<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - allowExternalIdToUseEmailOtp
 * - includeTargets
 */
class EmailAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_EXTERNAL_ID_TO_USE_EMAIL_OTP = 'allowExternalIdToUseEmailOtp';
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific EmailAuthenticationMethodConfiguration properties
     * 
     * @param array<string> $select Use EmailAuthenticationMethodConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
