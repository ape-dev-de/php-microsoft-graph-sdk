<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileEvidence resources
 *
 * Available select fields:
 */
class SecurityFileEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFileEvidence
     */

    /**
     * Select specific SecurityFileEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
