<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelSetAsFavoriteByDefaultEventMessageDetail resources
 *
 * Available select fields:
 */
class ChannelSetAsFavoriteByDefaultEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelSetAsFavoriteByDefaultEventMessageDetail
     */

    /**
     * Select specific ChannelSetAsFavoriteByDefaultEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
