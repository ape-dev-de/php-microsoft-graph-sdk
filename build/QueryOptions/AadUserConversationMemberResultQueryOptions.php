<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserConversationMemberResult resources
 *
 * Available select fields:
 * - userId
 */
class AadUserConversationMemberResultQueryOptions extends QueryOptions
{
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific AadUserConversationMemberResult properties
     * 
     * @param array<string> $select Use AadUserConversationMemberResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
