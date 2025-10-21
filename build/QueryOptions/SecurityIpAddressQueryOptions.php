<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIpAddress resources
 *
 * Available select fields:
 */
class SecurityIpAddressQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIpAddress
     */

    /**
     * Select specific SecurityIpAddress properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
