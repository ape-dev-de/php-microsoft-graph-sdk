<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantUserSyncInbound
 */
class CrossTenantUserSyncInbound
{
    public function __construct(
        /** Defines whether user objects should be synchronized from the partner tenant. false causes any current user synchronization from the source tenant to the target tenant to stop. This property has no impact on existing users who have already been synchronized. */
        public ?string $isSyncAllowed = null
    ) {}
}
