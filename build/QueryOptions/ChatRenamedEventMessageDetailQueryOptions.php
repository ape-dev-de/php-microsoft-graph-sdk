<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatRenamedEventMessageDetail resources
 *
 * Available select fields:
 */
class ChatRenamedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatRenamedEventMessageDetail
     */

    /**
     * Select specific ChatRenamedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
