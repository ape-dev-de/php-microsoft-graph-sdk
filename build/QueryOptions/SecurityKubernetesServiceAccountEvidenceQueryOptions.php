<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesServiceAccountEvidence resources
 *
 * Available select fields:
 * - name
 * - namespace
 */
class SecurityKubernetesServiceAccountEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_NAMESPACE = 'namespace';

    /**
     * Select specific SecurityKubernetesServiceAccountEvidence properties
     * 
     * @param array<string> $select Use SecurityKubernetesServiceAccountEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
