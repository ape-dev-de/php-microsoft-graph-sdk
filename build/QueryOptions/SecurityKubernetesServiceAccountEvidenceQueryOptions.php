<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesServiceAccountEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesServiceAccountEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesServiceAccountEvidence
     */

    /**
     * Select specific SecurityKubernetesServiceAccountEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
