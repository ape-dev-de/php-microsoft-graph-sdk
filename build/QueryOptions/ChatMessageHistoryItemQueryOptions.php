<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageHistoryItem resources
 *
 * Available select fields:
 * - actions
 * - modifiedDateTime
 * - reaction
 */
class ChatMessageHistoryItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageHistoryItem
     */
    public const FIELD_ACTIONS = 'actions';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_REACTION = 'reaction';

    /**
     * Select specific ChatMessageHistoryItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
