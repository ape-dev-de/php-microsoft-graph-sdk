<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityServicePrincipalEvidence resources
 *
 * Available select fields:
 */
class SecurityServicePrincipalEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityServicePrincipalEvidence
     */

    /**
     * Select specific SecurityServicePrincipalEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
