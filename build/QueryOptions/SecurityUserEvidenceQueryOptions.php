<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUserEvidence resources
 *
 * Available select fields:
 */
class SecurityUserEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityUserEvidence
     */

    /**
     * Select specific SecurityUserEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
