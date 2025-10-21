<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageType resources
 *
 * Available select fields:
 */
class ChatMessageTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageType
     */

    /**
     * Select specific ChatMessageType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
