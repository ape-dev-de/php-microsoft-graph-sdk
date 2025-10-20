<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsUserIdentity resources
 *
 * Available select fields:
 * - userPrincipalName
 */
class CallRecordsUserIdentityQueryOptions extends QueryOptions
{
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific CallRecordsUserIdentity properties
     * 
     * @param array<string> $select Use CallRecordsUserIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
