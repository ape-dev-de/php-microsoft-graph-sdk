<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIpEvidence resources
 *
 * Available select fields:
 */
class SecurityIpEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIpEvidence
     */

    /**
     * Select specific SecurityIpEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
