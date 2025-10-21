<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SamlOrWsFedProvider resources
 *
 * Available select fields:
 */
class SamlOrWsFedProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SamlOrWsFedProvider
     */

    /**
     * Select specific SamlOrWsFedProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
