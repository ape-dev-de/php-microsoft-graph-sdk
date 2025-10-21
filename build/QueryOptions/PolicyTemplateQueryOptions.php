<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyTemplate resources
 *
 * Available select fields:
 * - multiTenantOrganizationIdentitySynchronization
 * - multiTenantOrganizationPartnerConfiguration
 */
class PolicyTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyTemplate
     */
    public const FIELD_MULTI_TENANT_ORGANIZATION_IDENTITY_SYNCHRONIZATION = 'multiTenantOrganizationIdentitySynchronization';
    public const FIELD_MULTI_TENANT_ORGANIZATION_PARTNER_CONFIGURATION = 'multiTenantOrganizationPartnerConfiguration';

    /**
     * Select specific PolicyTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
