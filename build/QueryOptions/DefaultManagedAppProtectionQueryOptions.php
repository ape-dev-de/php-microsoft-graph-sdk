<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefaultManagedAppProtection resources
 *
 * Available select fields:
 */
class DefaultManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefaultManagedAppProtection
     */

    /**
     * Select specific DefaultManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
