<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftEdgeChannel resources
 *
 * Available select fields:
 */
class MicrosoftEdgeChannelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftEdgeChannel
     */

    /**
     * Select specific MicrosoftEdgeChannel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
