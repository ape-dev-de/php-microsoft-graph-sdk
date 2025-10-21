<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRegistryKeyEvidence resources
 *
 * Available select fields:
 */
class SecurityRegistryKeyEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRegistryKeyEvidence
     */

    /**
     * Select specific SecurityRegistryKeyEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
