<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppProtection resources
 *
 * Available select fields:
 */
class ManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppProtection
     */

    /**
     * Select specific ManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
