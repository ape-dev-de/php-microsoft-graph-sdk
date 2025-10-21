<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DestinationType resources
 *
 * Available select fields:
 */
class DestinationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DestinationType
     */

    /**
     * Select specific DestinationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
