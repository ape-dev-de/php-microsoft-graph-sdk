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
    /**
     * Available select fields for SkypeForBusinessUserConversationMember
     */
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific SkypeForBusinessUserConversationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
