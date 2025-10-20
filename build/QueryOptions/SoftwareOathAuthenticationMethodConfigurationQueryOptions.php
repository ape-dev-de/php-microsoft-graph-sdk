<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareOathAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 * - includeTargets
 */
class SoftwareOathAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific SoftwareOathAuthenticationMethodConfiguration properties
     * 
     * @param array<string> $select Use SoftwareOathAuthenticationMethodConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
