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
    public const FIELD_REGISTRY = 'registry';

    /**
     * Select specific SecurityContainerRegistryEvidence properties
     * 
     * @param array<string> $select Use SecurityContainerRegistryEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
