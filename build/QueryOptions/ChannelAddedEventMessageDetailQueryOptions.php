<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelAddedEventMessageDetail resources
 *
 * Available select fields:
 */
class ChannelAddedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelAddedEventMessageDetail
     */

    /**
     * Select specific ChannelAddedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
