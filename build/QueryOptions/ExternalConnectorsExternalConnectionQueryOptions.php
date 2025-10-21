<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalConnection resources
 *
 * Available select fields:
 */
class ExternalConnectorsExternalConnectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalConnection
     */

    /**
     * Select specific ExternalConnectorsExternalConnection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
