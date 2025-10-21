<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskReport resources
 *
 * Available select fields:
 */
class IdentityGovernanceTaskReportQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTaskReport
     */

    /**
     * Select specific IdentityGovernanceTaskReport properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
