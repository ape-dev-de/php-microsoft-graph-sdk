<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalGroup resources
 *
 * Available select fields:
 */
class ExternalConnectorsExternalGroupQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalGroup
     */

    /**
     * Select specific ExternalConnectorsExternalGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
