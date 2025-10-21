<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileHashEvidence resources
 *
 * Available select fields:
 */
class SecurityFileHashEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFileHashEvidence
     */

    /**
     * Select specific SecurityFileHashEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
