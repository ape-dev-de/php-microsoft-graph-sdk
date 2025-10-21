<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesSecretEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesSecretEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesSecretEvidence
     */

    /**
     * Select specific SecurityKubernetesSecretEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
