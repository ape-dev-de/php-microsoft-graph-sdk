<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganizationMembers
 */
class ConnectedOrganizationMembers
{
    public function __construct(
        /** The ID of the connected organization in entitlement management. */
        public ?string $connectedOrganizationId = null,
        /** The name of the connected organization. */
        public ?string $description = null
    ) {}
}
