<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityBlobEvidence resources
 *
 * Available select fields:
 */
class SecurityBlobEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityBlobEvidence
     */

    /**
     * Select specific SecurityBlobEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
