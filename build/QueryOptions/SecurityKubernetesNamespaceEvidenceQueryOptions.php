<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesNamespaceEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesNamespaceEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesNamespaceEvidence
     */

    /**
     * Select specific SecurityKubernetesNamespaceEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
