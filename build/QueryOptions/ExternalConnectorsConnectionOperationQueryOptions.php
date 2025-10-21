<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsConnectionOperation resources
 *
 * Available select fields:
 */
class ExternalConnectorsConnectionOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsConnectionOperation
     */

    /**
     * Select specific ExternalConnectorsConnectionOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
