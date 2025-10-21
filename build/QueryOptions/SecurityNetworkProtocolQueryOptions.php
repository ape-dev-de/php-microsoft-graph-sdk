<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNetworkProtocol resources
 *
 * Available select fields:
 */
class SecurityNetworkProtocolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityNetworkProtocol
     */

    /**
     * Select specific SecurityNetworkProtocol properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
