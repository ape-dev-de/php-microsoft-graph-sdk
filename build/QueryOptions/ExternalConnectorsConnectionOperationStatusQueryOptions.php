<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsConnectionOperationStatus resources
 *
 * Available select fields:
 */
class ExternalConnectorsConnectionOperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsConnectionOperationStatus
     */

    /**
     * Select specific ExternalConnectorsConnectionOperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
