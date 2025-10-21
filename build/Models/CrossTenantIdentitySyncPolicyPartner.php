<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantIdentitySyncPolicyPartner
 */
class CrossTenantIdentitySyncPolicyPartner
{
    public function __construct(
        /** Display name for the cross-tenant user synchronization policy. Use the name of the partner Microsoft Entra tenant to easily identify the policy. Optional. */
        public ?string $displayName = null,
        /** Tenant identifier for the partner Microsoft Entra organization. Read-only. */
        public ?string $tenantId = null,
        /** Defines whether users can be synchronized from the partner tenant. Key. */
        public ?CrossTenantUserSyncInbound $userSyncInbound = null
    ) {}
}
