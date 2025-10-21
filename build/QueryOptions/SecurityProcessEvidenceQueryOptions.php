<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityProcessEvidence resources
 *
 * Available select fields:
 */
class SecurityProcessEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityProcessEvidence
     */

    /**
     * Select specific SecurityProcessEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
