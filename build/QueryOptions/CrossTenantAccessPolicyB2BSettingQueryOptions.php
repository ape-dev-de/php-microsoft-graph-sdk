<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyB2BSetting resources
 *
 * Available select fields:
 * - applications
 * - usersAndGroups
 */
class CrossTenantAccessPolicyB2BSettingQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATIONS = 'applications';
    public const FIELD_USERS_AND_GROUPS = 'usersAndGroups';

    /**
     * Select specific CrossTenantAccessPolicyB2BSetting properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyB2BSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
