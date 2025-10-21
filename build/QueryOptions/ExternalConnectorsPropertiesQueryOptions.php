<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsProperties resources
 *
 * Available select fields:
 */
class ExternalConnectorsPropertiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsProperties
     */

    /**
     * Select specific ExternalConnectorsProperties properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
