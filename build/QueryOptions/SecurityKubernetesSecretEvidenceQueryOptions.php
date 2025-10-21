<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesSecretEvidence resources
 *
 * Available select fields:
 * - name
 * - namespace
 * - secretType
 */
class SecurityKubernetesSecretEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesSecretEvidence
     */
    public const FIELD_NAME = 'name';
    public const FIELD_NAMESPACE = 'namespace';
    public const FIELD_SECRET_TYPE = 'secretType';

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
