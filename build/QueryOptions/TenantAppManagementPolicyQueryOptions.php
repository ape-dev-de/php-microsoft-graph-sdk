<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantAppManagementPolicy resources
 *
 * Available select fields:
 * - applicationRestrictions
 * - isEnabled
 * - servicePrincipalRestrictions
 */
class TenantAppManagementPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TenantAppManagementPolicy
     */
    public const FIELD_APPLICATION_RESTRICTIONS = 'applicationRestrictions';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_SERVICE_PRINCIPAL_RESTRICTIONS = 'servicePrincipalRestrictions';

    /**
     * Select specific TenantAppManagementPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
