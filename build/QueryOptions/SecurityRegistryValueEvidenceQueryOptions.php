<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRegistryValueEvidence resources
 *
 * Available select fields:
 */
class SecurityRegistryValueEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRegistryValueEvidence
     */

    /**
     * Select specific SecurityRegistryValueEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
