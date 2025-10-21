<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityBlobContainerEvidence resources
 *
 * Available select fields:
 */
class SecurityBlobContainerEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityBlobContainerEvidence
     */

    /**
     * Select specific SecurityBlobContainerEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
