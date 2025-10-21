<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81CompliancePolicy resources
 *
 * Available select fields:
 */
class WindowsPhone81CompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsPhone81CompliancePolicy
     */

    /**
     * Select specific WindowsPhone81CompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
