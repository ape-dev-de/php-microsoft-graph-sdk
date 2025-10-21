<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceState resources
 *
 * Available select fields:
 */
class ComplianceStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ComplianceState
     */

    /**
     * Select specific ComplianceState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
