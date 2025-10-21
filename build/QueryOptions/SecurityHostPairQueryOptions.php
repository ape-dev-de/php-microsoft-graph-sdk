<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPair resources
 *
 * Available select fields:
 */
class SecurityHostPairQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostPair
     */

    /**
     * Select specific SecurityHostPair properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
