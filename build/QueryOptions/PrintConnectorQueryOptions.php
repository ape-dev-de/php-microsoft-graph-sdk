<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintConnector resources
 *
 * Available select fields:
 */
class PrintConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintConnector
     */

    /**
     * Select specific PrintConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
