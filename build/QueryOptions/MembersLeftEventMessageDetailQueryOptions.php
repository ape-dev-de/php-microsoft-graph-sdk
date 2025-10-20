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
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific MembersLeftEventMessageDetail properties
     * 
     * @param array<string> $select Use MembersLeftEventMessageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
