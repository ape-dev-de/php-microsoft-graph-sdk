<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesServiceEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesServiceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesServiceEvidence
     */

    /**
     * Select specific SecurityKubernetesServiceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
