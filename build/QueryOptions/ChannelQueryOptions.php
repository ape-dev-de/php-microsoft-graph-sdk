<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Channel resources
 *
 * Available select fields:
 */
class ChannelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Channel
     */

    /**
     * Select specific Channel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
