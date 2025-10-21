<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsPropertyType resources
 *
 * Available select fields:
 */
class ExternalConnectorsPropertyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsPropertyType
     */

    /**
     * Select specific ExternalConnectorsPropertyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
