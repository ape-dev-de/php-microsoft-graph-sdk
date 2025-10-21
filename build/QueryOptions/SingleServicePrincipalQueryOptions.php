<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleServicePrincipal resources
 *
 * Available select fields:
 */
class SingleServicePrincipalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SingleServicePrincipal
     */

    /**
     * Select specific SingleServicePrincipal properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
