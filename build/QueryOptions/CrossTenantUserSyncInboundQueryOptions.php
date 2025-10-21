<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantUserSyncInbound resources
 *
 * Available select fields:
 * - isSyncAllowed
 */
class CrossTenantUserSyncInboundQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossTenantUserSyncInbound
     */
    public const FIELD_IS_SYNC_ALLOWED = 'isSyncAllowed';

    /**
     * Select specific CrossTenantUserSyncInbound properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
