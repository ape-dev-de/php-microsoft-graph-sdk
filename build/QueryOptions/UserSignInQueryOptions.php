<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSignIn resources
 *
 * Available select fields:
 * - externalTenantId
 * - externalUserType
 * - userId
 */
class UserSignInQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSignIn
     */
    public const FIELD_EXTERNAL_TENANT_ID = 'externalTenantId';
    public const FIELD_EXTERNAL_USER_TYPE = 'externalUserType';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific UserSignIn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
