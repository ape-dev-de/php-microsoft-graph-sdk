<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRegistryKeyEvidence resources
 *
 * Available select fields:
 * - registryHive
 * - registryKey
 */
class SecurityRegistryKeyEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRegistryKeyEvidence
     */
    public const FIELD_REGISTRY_HIVE = 'registryHive';
    public const FIELD_REGISTRY_KEY = 'registryKey';

    /**
     * Select specific SecurityRegistryKeyEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
