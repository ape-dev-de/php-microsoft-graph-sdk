<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppProtection resources
 *
 * Available select fields:
 * - isAssigned
 * - assignments
 */
class TargetedManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetedManagedAppProtection
     */
    public const FIELD_IS_ASSIGNED = 'isAssigned';
    public const FIELD_ASSIGNMENTS = 'assignments';

    /**
     * Select specific TargetedManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
