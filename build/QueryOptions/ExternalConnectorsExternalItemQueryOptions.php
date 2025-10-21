<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalItem resources
 *
 * Available select fields:
 */
class ExternalConnectorsExternalItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalItem
     */

    /**
     * Select specific ExternalConnectorsExternalItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
