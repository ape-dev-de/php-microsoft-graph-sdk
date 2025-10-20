<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesControllerEvidence resources
 *
 * Available select fields:
 * - labels
 * - name
 * - namespace
 * - type
 */
class SecurityKubernetesControllerEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_LABELS = 'labels';
    public const FIELD_NAME = 'name';
    public const FIELD_NAMESPACE = 'namespace';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific SecurityKubernetesControllerEvidence properties
     * 
     * @param array<string> $select Use SecurityKubernetesControllerEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
