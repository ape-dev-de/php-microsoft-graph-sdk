<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationIdentitySyncPolicyTemplate resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationIdentitySyncPolicyTemplate
     */

    /**
     * Select specific MultiTenantOrganizationIdentitySyncPolicyTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
