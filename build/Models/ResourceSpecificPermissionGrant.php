<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceSpecificPermissionGrant
 */
class ResourceSpecificPermissionGrant
{
    public function __construct(
        /** ID of the service principal of the Microsoft Entra app that has been granted access. Read-only. */
        public ?string $clientAppId = null,
        /** ID of the Microsoft Entra app that has been granted access. Read-only. */
        public ?string $clientId = null,
        /** The name of the resource-specific permission. Read-only. */
        public ?string $permission = null,
        /** The type of permission. Possible values are: Application, Delegated. Read-only. */
        public ?string $permissionType = null,
        /** ID of the Microsoft Entra app that is hosting the resource. Read-only. */
        public ?string $resourceAppId = null
    ) {}
}
