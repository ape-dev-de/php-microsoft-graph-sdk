<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Compliance resources
 *
 * Available select fields:
 */
class ComplianceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Compliance
     */

    /**
     * Select specific Compliance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
