<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskyServicePrincipal resources
 *
 * Available select fields:
 */
class RiskyServicePrincipalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskyServicePrincipal
     */

    /**
     * Select specific RiskyServicePrincipal properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
