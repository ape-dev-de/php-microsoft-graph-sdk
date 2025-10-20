<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantIdentitySyncPolicyPartner resources
 *
 * Available select fields:
 * - displayName
 * - tenantId
 * - userSyncInbound
 */
class CrossTenantIdentitySyncPolicyPartnerQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_USER_SYNC_INBOUND = 'userSyncInbound';

    /**
     * Select specific CrossTenantIdentitySyncPolicyPartner properties
     * 
     * @param array<string> $select Use CrossTenantIdentitySyncPolicyPartnerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
