<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsNetworkConnectionType resources
 *
 * Available select fields:
 */
class CallRecordsNetworkConnectionTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsNetworkConnectionType
     */

    /**
     * Select specific CallRecordsNetworkConnectionType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
