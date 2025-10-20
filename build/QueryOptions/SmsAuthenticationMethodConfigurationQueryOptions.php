<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SmsAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - includeTargets
 */
class SmsAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific SmsAuthenticationMethodConfiguration properties
     * 
     * @param array<string> $select Use SmsAuthenticationMethodConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
