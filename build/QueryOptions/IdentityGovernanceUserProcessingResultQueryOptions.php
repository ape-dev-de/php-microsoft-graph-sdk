<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceUserProcessingResult resources
 *
 * Available select fields:
 */
class IdentityGovernanceUserProcessingResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceUserProcessingResult
     */

    /**
     * Select specific IdentityGovernanceUserProcessingResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
