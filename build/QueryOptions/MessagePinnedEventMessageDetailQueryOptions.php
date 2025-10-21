<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessagePinnedEventMessageDetail resources
 *
 * Available select fields:
 */
class MessagePinnedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessagePinnedEventMessageDetail
     */

    /**
     * Select specific MessagePinnedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
