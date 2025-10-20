<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PinnedChatMessageInfo resources
 *
 * Available select fields:
 * - message
 */
class PinnedChatMessageInfoQueryOptions extends QueryOptions
{
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific PinnedChatMessageInfo properties
     * 
     * @param array<string> $select Use PinnedChatMessageInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
