<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintServiceEndpoint resources
 *
 * Available select fields:
 */
class PrintServiceEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintServiceEndpoint
     */

    /**
     * Select specific PrintServiceEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
