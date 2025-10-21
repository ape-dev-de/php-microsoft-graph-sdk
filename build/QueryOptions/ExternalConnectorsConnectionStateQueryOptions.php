<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsConnectionState resources
 *
 * Available select fields:
 */
class ExternalConnectorsConnectionStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsConnectionState
     */

    /**
     * Select specific ExternalConnectorsConnectionState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
