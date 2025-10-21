<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsLabel resources
 *
 * Available select fields:
 */
class ExternalConnectorsLabelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsLabel
     */

    /**
     * Select specific ExternalConnectorsLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
