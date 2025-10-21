<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEndpoint resources
 *
 * Available select fields:
 */
class VirtualEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VirtualEndpoint
     */

    /**
     * Select specific VirtualEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
