<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityContainerRegistryEvidence resources
 *
 * Available select fields:
 * - registry
 */
class SecurityContainerRegistryEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityContainerRegistryEvidence
     */
    public const FIELD_REGISTRY = 'registry';

    /**
     * Select specific SecurityContainerRegistryEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
