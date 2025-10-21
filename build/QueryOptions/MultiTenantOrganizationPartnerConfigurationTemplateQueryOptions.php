<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationPartnerConfigurationTemplate resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationPartnerConfigurationTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationPartnerConfigurationTemplate
     */

    /**
     * Select specific MultiTenantOrganizationPartnerConfigurationTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
