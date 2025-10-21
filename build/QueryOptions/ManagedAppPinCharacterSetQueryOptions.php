<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPinCharacterSet resources
 *
 * Available select fields:
 */
class ManagedAppPinCharacterSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppPinCharacterSet
     */

    /**
     * Select specific ManagedAppPinCharacterSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
