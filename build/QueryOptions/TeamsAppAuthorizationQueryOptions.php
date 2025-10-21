<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamsAppAuthorization resources
 *
 * Available select fields:
 * - clientAppId
 * - requiredPermissionSet
 */
class TeamsAppAuthorizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamsAppAuthorization
     */
    public const FIELD_CLIENT_APP_ID = 'clientAppId';
    public const FIELD_REQUIRED_PERMISSION_SET = 'requiredPermissionSet';

    /**
     * Select specific TeamsAppAuthorization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
