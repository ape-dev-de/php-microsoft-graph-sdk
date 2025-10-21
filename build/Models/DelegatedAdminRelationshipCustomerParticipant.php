<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipCustomerParticipant
 */
class DelegatedAdminRelationshipCustomerParticipant
{
    public function __construct(
        /** The display name of the customer tenant as set by Microsoft Entra ID. Read-only */
        public ?string $displayName = null,
        /** The Microsoft Entra ID-assigned tenant ID of the customer tenant. */
        public ?string $tenantId = null
    ) {}
}
