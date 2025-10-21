<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndpointType resources
 *
 * Available select fields:
 */
class EndpointTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndpointType
     */

    /**
     * Select specific EndpointType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
