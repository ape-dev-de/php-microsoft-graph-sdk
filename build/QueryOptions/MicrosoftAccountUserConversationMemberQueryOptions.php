<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAccountUserConversationMember resources
 *
 * Available select fields:
 * - userId
 */
class MicrosoftAccountUserConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific MicrosoftAccountUserConversationMember properties
     * 
     * @param array<string> $select Use MicrosoftAccountUserConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
