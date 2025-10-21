<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersLeftEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - members
 */
class MembersLeftEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembersLeftEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific MembersLeftEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
