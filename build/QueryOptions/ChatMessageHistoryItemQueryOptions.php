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
    public const FIELD_ACTIONS = 'actions';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_REACTION = 'reaction';

    /**
     * Select specific ChatMessageHistoryItem properties
     * 
     * @param array<string> $select Use ChatMessageHistoryItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
