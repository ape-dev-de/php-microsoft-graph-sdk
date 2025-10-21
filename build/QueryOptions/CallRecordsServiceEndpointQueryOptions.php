<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsServiceEndpoint resources
 *
 * Available select fields:
 */
class CallRecordsServiceEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsServiceEndpoint
     */

    /**
     * Select specific CallRecordsServiceEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
