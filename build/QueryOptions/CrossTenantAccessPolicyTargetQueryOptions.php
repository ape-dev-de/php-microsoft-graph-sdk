<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyTarget resources
 *
 * Available select fields:
 * - target
 * - targetType
 */
class CrossTenantAccessPolicyTargetQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';
    public const FIELD_TARGET_TYPE = 'targetType';

    /**
     * Select specific CrossTenantAccessPolicyTarget properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
