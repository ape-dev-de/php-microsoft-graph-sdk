<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerEvidence resources
 *
 * Available select fields:
 */
class SecurityContainerEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityContainerEvidence
     */

    /**
     * Select specific SecurityContainerEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
