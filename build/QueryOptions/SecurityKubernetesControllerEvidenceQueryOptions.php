<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesControllerEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesControllerEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesControllerEvidence
     */

    /**
     * Select specific SecurityKubernetesControllerEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
