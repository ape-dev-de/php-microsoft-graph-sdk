<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminCustomer
 */
class DelegatedAdminCustomer
{
    public function __construct(
        /** The Microsoft Entra ID display name of the customer tenant. Read-only. Supports $orderby. */
        public ?string $displayName = null,
        /** The Microsoft Entra ID-assigned tenant ID of the customer. Read-only. */
        public ?string $tenantId = null,
        /** @var string[] Contains the management details of a service in the customer tenant that's managed by delegated administration. */
        public array $serviceManagementDetails = []
    ) {}
}
