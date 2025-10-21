<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessage resources
 *
 * Available select fields:
 */
class ChatMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessage
     */

    /**
     * Select specific ChatMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
