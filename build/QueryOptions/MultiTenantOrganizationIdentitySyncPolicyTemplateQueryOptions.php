<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationIdentitySyncPolicyTemplate resources
 *
 * Available select fields:
 * - templateApplicationLevel
 * - userSyncInbound
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationIdentitySyncPolicyTemplate
     */
    public const FIELD_TEMPLATE_APPLICATION_LEVEL = 'templateApplicationLevel';
    public const FIELD_USER_SYNC_INBOUND = 'userSyncInbound';

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
