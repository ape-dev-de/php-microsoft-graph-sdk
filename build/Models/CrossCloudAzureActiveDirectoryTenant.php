<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossCloudAzureActiveDirectoryTenant
 */
class CrossCloudAzureActiveDirectoryTenant
{
    public function __construct(
        /** The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only. */
        public ?string $cloudInstance = null,
        /** The name of the Microsoft Entra tenant. Read only. */
        public ?string $displayName = null,
        /** The ID of the Microsoft Entra tenant. Read only. */
        public ?string $tenantId = null
    ) {}
}
