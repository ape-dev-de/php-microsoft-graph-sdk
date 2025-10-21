<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityMailClusterEvidence resources
 *
 * Available select fields:
 */
class SecurityMailClusterEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityMailClusterEvidence
     */

    /**
     * Select specific SecurityMailClusterEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
