<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SkypeForBusinessUserConversationMember resources
 *
 * Available select fields:
 * - tenantId
 * - userId
 */
class SkypeForBusinessUserConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific SkypeForBusinessUserConversationMember properties
     * 
     * @param array<string> $select Use SkypeForBusinessUserConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
