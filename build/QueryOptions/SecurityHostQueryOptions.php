<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHost resources
 *
 * Available select fields:
 */
class SecurityHostQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHost
     */

    /**
     * Select specific SecurityHost properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
