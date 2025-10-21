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
    /**
     * Available select fields for SoftwareOathAuthenticationMethodConfiguration
     */
    public const FIELD_INCLUDE_TARGETS = 'includeTargets';

    /**
     * Select specific SoftwareOathAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
