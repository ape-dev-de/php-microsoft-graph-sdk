<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminCustomer resources
 *
 * Available select fields:
 * - displayName
 * - tenantId
 * - serviceManagementDetails
 */
class DelegatedAdminCustomerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminCustomer
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_SERVICE_MANAGEMENT_DETAILS = 'serviceManagementDetails';

    /**
     * Select specific DelegatedAdminCustomer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
