<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserIdentity resources
 *
 * Available select fields:
 * - ipAddress
 * - userPrincipalName
 */
class UserIdentityQueryOptions extends QueryOptions
{
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific UserIdentity properties
     * 
     * @param array<string> $select Use UserIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
