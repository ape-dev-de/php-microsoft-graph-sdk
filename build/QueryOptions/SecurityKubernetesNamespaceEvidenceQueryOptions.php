<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesNamespaceEvidence resources
 *
 * Available select fields:
 * - cluster
 * - labels
 * - name
 */
class SecurityKubernetesNamespaceEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_CLUSTER = 'cluster';
    public const FIELD_LABELS = 'labels';
    public const FIELD_NAME = 'name';

    /**
     * Select specific SecurityKubernetesNamespaceEvidence properties
     * 
     * @param array<string> $select Use SecurityKubernetesNamespaceEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
