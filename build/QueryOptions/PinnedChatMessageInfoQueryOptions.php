<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PinnedChatMessageInfo resources
 *
 * Available select fields:
 */
class PinnedChatMessageInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PinnedChatMessageInfo
     */

    /**
     * Select specific PinnedChatMessageInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
