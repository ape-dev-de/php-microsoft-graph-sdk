<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySecurityGroupEvidence resources
 *
 * Available select fields:
 */
class SecuritySecurityGroupEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySecurityGroupEvidence
     */

    /**
     * Select specific SecuritySecurityGroupEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
