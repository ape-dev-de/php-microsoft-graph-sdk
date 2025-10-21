<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidManagedAppProtection resources
 *
 * Available select fields:
 */
class AndroidManagedAppProtectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidManagedAppProtection
     */

    /**
     * Select specific AndroidManagedAppProtection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
