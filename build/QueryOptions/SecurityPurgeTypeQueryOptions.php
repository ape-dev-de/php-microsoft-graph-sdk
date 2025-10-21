<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityPurgeType resources
 *
 * Available select fields:
 */
class SecurityPurgeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityPurgeType
     */

    /**
     * Select specific SecurityPurgeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
