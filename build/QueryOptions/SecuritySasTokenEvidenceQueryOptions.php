<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySasTokenEvidence resources
 *
 * Available select fields:
 */
class SecuritySasTokenEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySasTokenEvidence
     */

    /**
     * Select specific SecuritySasTokenEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
