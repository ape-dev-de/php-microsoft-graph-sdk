<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminServiceManagementDetail resources
 *
 * Available select fields:
 * - serviceManagementUrl
 * - serviceName
 */
class DelegatedAdminServiceManagementDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminServiceManagementDetail
     */
    public const FIELD_SERVICE_MANAGEMENT_URL = 'serviceManagementUrl';
    public const FIELD_SERVICE_NAME = 'serviceName';

    /**
     * Select specific DelegatedAdminServiceManagementDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
