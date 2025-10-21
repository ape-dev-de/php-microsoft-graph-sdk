<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesClusterEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesClusterEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesClusterEvidence
     */

    /**
     * Select specific SecurityKubernetesClusterEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
