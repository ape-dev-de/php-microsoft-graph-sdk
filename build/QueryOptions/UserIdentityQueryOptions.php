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
    /**
     * Available select fields for UserIdentity
     */
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific UserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
