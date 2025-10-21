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
    /**
     * Available select fields for SmsAuthenticationMethodConfiguration
     */
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific SmsAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
