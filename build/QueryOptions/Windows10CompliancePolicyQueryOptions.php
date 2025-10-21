<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10CompliancePolicy resources
 *
 * Available select fields:
 */
class Windows10CompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10CompliancePolicy
     */

    /**
     * Select specific Windows10CompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
