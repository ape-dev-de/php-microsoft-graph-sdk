<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetedManagedAppProtection resources
 *
 * Available select fields:
 */
class TargetedManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetedManagedAppProtection
     */

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
