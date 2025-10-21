<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationIdentitySyncPolicyTemplate
 */
class MultiTenantOrganizationIdentitySyncPolicyTemplate
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?TemplateApplicationLevel $templateApplicationLevel = null,
        /** Defines whether users can be synchronized from the partner tenant. */
        public ?CrossTenantUserSyncInbound $userSyncInbound = null
    ) {}
}
