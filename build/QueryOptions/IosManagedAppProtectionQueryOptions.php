<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosManagedAppProtection resources
 *
 * Available select fields:
 */
class IosManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosManagedAppProtection
     */

    /**
     * Select specific IosManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
