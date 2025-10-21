<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedPermissionClassification
 */
class DelegatedPermissionClassification
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The classification value. Possible values: low, medium (preview), high (preview). Doesn't support $filter. */
        public ?PermissionClassificationType $classification = null,
        /** The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Doesn't support $filter. */
        public ?string $permissionId = null,
        /** The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Doesn't support $filter. */
        public ?string $permissionName = null
    ) {}
}
