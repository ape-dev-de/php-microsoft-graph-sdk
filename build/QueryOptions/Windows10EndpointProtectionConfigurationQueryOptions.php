<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EndpointProtectionConfiguration resources
 *
 * Available select fields:
 */
class Windows10EndpointProtectionConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10EndpointProtectionConfiguration
     */

    /**
     * Select specific Windows10EndpointProtectionConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
