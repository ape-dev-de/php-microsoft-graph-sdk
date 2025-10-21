<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HttpRequestEndpoint resources
 *
 * Available select fields:
 */
class HttpRequestEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HttpRequestEndpoint
     */

    /**
     * Select specific HttpRequestEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
