<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceRoleScope resources
 *
 * Available select fields:
 * - createdDateTime
 * - role
 * - scope
 */
class AccessPackageResourceRoleScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceRoleScope
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ROLE = 'role';
    public const FIELD_SCOPE = 'scope';

    /**
     * Select specific AccessPackageResourceRoleScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
