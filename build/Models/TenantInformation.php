<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantInformation
 */
class TenantInformation
{
    public function __construct(
        /** Primary domain name of a Microsoft Entra tenant. */
        public ?string $defaultDomainName = null,
        /** Display name of a Microsoft Entra tenant. */
        public ?string $displayName = null,
        /** Name shown to users that sign in to a Microsoft Entra tenant. */
        public ?string $federationBrandName = null,
        /** Unique identifier of a Microsoft Entra tenant. */
        public ?string $tenantId = null
    ) {}
}
