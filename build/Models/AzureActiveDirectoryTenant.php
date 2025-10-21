<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureActiveDirectoryTenant
 */
class AzureActiveDirectoryTenant
{
    public function __construct(
        /** The name of the Microsoft Entra tenant. Read only. */
        public ?string $displayName = null,
        /** The ID of the Microsoft Entra tenant. Read only. */
        public ?string $tenantId = null
    ) {}
}
