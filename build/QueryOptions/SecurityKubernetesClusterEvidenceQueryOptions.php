<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesClusterEvidence resources
 *
 * Available select fields:
 * - cloudResource
 * - distribution
 * - name
 * - platform
 * - version
 */
class SecurityKubernetesClusterEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityKubernetesClusterEvidence
     */
    public const FIELD_CLOUD_RESOURCE = 'cloudResource';
    public const FIELD_DISTRIBUTION = 'distribution';
    public const FIELD_NAME = 'name';
    public const FIELD_PLATFORM = 'platform';
    public const FIELD_VERSION = 'version';

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
