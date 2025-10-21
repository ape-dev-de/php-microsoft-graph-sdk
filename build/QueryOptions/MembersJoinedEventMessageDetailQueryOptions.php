<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersJoinedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - members
 */
class MembersJoinedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembersJoinedEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific MembersJoinedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
