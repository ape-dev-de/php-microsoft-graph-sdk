<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyTargetConfiguration resources
 *
 * Available select fields:
 * - accessType
 * - targets
 */
class CrossTenantAccessPolicyTargetConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_TYPE = 'accessType';
    public const FIELD_TARGETS = 'targets';

    /**
     * Select specific CrossTenantAccessPolicyTargetConfiguration properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyTargetConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
