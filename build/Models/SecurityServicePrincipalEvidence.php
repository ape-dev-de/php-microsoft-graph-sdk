<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityServicePrincipalEvidence
 */
class SecurityServicePrincipalEvidence
{
    public function __construct(
        /**  */
        public ?string $appId = null,
        /**  */
        public ?string $appOwnerTenantId = null,
        /**  */
        public ?string $servicePrincipalName = null,
        /**  */
        public ?string $servicePrincipalObjectId = null,
        /**  */
        public ?string $servicePrincipalType = null,
        /**  */
        public ?string $tenantId = null
    ) {}
}
