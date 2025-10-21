<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelRenamedEventMessageDetail resources
 *
 * Available select fields:
 */
class ChannelRenamedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelRenamedEventMessageDetail
     */

    /**
     * Select specific ChannelRenamedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
