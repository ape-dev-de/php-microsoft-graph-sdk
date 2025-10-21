<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsNetworkTransportProtocol resources
 *
 * Available select fields:
 */
class CallRecordsNetworkTransportProtocolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsNetworkTransportProtocol
     */

    /**
     * Select specific CallRecordsNetworkTransportProtocol properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
