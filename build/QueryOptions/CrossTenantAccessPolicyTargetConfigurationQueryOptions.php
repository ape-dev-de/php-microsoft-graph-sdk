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
    /**
     * Available select fields for CrossTenantAccessPolicyTargetConfiguration
     */
    public const FIELD_ACCESS_TYPE = 'accessType';
    public const FIELD_TARGETS = 'targets';

    /**
     * Select specific CrossTenantAccessPolicyTargetConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
