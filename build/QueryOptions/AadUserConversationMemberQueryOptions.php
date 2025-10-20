<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AadUserConversationMember resources
 *
 * Available select fields:
 * - email
 * - tenantId
 * - userId
 * - user
 */
class AadUserConversationMemberQueryOptions extends QueryOptions
{
    public const FIELD_EMAIL = 'email';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER = 'user';

    /**
     * Select specific AadUserConversationMember properties
     * 
     * @param array<string> $select Use AadUserConversationMemberQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
