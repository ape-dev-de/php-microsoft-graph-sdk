<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsItemIdResolver resources
 *
 * Available select fields:
 */
class ExternalConnectorsItemIdResolverQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsItemIdResolver
     */

    /**
     * Select specific ExternalConnectorsItemIdResolver properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
