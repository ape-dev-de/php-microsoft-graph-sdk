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
    /**
     * Available select fields for CallRecordsUserIdentity
     */
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific CallRecordsUserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
