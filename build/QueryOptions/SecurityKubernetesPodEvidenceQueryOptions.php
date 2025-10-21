<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesPodEvidence resources
 *
 * Available select fields:
 */
class SecurityKubernetesPodEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesPodEvidence
     */

    /**
     * Select specific SecurityKubernetesPodEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
