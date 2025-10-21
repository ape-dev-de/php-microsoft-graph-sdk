<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationIdentitySyncPolicyTemplate
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplate
{
    public function __construct(
        /**  */
        public ?string $templateApplicationLevel = null,
        /** Defines whether users can be synchronized from the partner tenant. */
        public ?string $userSyncInbound = null
    ) {}
}
