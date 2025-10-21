<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageUnpinnedEventMessageDetail resources
 *
 * Available select fields:
 */
class MessageUnpinnedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessageUnpinnedEventMessageDetail
     */

    /**
     * Select specific MessageUnpinnedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
