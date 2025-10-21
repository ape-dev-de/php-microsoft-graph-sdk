<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Endpoint resources
 *
 * Available select fields:
 */
class EndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Endpoint
     */

    /**
     * Select specific Endpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
