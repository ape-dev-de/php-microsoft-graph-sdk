<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNetworkConnectionEvidence resources
 *
 * Available select fields:
 */
class SecurityNetworkConnectionEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityNetworkConnectionEvidence
     */

    /**
     * Select specific SecurityNetworkConnectionEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
