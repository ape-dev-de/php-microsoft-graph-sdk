<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAzureResourceEvidence resources
 *
 * Available select fields:
 */
class SecurityAzureResourceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityAzureResourceEvidence
     */

    /**
     * Select specific SecurityAzureResourceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
