<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTemplate
 */
class PolicyTemplate
{
    public function __construct(
        /** Defines an optional cross-tenant access policy template with user synchronization settings for a multitenant organization. */
        public ?string $multiTenantOrganizationIdentitySynchronization = null,
        /** Defines an optional cross-tenant access policy template with inbound and outbound partner configuration settings for a multitenant organization. */
        public ?string $multiTenantOrganizationPartnerConfiguration = null
    ) {}
}
