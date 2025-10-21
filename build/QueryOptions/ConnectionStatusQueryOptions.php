<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConnectionStatus resources
 *
 * Available select fields:
 */
class ConnectionStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConnectionStatus
     */

    /**
     * Select specific ConnectionStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
