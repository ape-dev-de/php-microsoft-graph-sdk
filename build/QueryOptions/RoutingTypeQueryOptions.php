<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RoutingType resources
 *
 * Available select fields:
 */
class RoutingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RoutingType
     */

    /**
     * Select specific RoutingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
