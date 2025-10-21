<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDnsEvidence resources
 *
 * Available select fields:
 */
class SecurityDnsEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDnsEvidence
     */

    /**
     * Select specific SecurityDnsEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
