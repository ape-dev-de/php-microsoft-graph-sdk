<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostname resources
 *
 * Available select fields:
 */
class SecurityHostnameQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostname
     */

    /**
     * Select specific SecurityHostname properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
