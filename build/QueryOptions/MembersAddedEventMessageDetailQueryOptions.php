<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersAddedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - members
 * - visibleHistoryStartDateTime
 */
class MembersAddedEventMessageDetailQueryOptions extends QueryOptions
{
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_VISIBLE_HISTORY_START_DATE_TIME = 'visibleHistoryStartDateTime';

    /**
     * Select specific MembersAddedEventMessageDetail properties
     * 
     * @param array<string> $select Use MembersAddedEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
