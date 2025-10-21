<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskProcessingResult resources
 *
 * Available select fields:
 */
class IdentityGovernanceTaskProcessingResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceTaskProcessingResult
     */

    /**
     * Select specific IdentityGovernanceTaskProcessingResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
