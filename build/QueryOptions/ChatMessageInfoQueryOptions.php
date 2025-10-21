<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageInfo resources
 *
 * Available select fields:
 */
class ChatMessageInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageInfo
     */

    /**
     * Select specific ChatMessageInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
