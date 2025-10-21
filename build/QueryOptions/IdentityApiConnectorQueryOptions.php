<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityApiConnector resources
 *
 * Available select fields:
 */
class IdentityApiConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityApiConnector
     */

    /**
     * Select specific IdentityApiConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
