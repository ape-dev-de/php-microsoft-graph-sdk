<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows81CompliancePolicy resources
 *
 * Available select fields:
 */
class Windows81CompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows81CompliancePolicy
     */

    /**
     * Select specific Windows81CompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
