<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationMember resources
 *
 * Available select fields:
 * - displayName
 * - roles
 * - visibleHistoryStartDateTime
 */
class ConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ROLES = 'roles';
    public const FIELD_VISIBLE_HISTORY_START_DATE_TIME = 'visibleHistoryStartDateTime';

    /**
     * Select specific ConversationMember properties
     * 
     * @param array<string> $select Use ConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
