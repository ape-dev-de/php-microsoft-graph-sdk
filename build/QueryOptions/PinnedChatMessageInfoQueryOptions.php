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
    /**
     * Available select fields for PinnedChatMessageInfo
     */
    public const FIELD_MESSAGE = 'message';

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
