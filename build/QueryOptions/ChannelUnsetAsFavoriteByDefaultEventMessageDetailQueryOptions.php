<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelUnsetAsFavoriteByDefaultEventMessageDetail resources
 *
 * Available select fields:
 */
class ChannelUnsetAsFavoriteByDefaultEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelUnsetAsFavoriteByDefaultEventMessageDetail
     */

    /**
     * Select specific ChannelUnsetAsFavoriteByDefaultEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
