<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceStatus resources
 *
 * Available select fields:
 */
class ComplianceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ComplianceStatus
     */

    /**
     * Select specific ComplianceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
