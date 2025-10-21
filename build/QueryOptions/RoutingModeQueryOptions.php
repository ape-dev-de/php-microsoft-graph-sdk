<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoutingMode resources
 *
 * Available select fields:
 */
class RoutingModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoutingMode
     */

    /**
     * Select specific RoutingMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
