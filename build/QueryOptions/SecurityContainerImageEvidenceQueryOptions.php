<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerImageEvidence resources
 *
 * Available select fields:
 */
class SecurityContainerImageEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityContainerImageEvidence
     */

    /**
     * Select specific SecurityContainerImageEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
