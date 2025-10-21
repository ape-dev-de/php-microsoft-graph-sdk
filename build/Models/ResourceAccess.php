<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceAccess
 */
class ResourceAccess
{
    public function __construct(
        /** The unique identifier of an app role or delegated permission exposed by the resource application. For delegated permissions, this should match the id property of one of the delegated permissions in the oauth2PermissionScopes collection of the resource application''s service principal. For app roles (application permissions), this should match the id property of an app role in the appRoles collection of the resource application''s service principal. */
        public ?string $id = null,
        /** Specifies whether the id property references a delegated permission or an app role (application permission). The possible values are: Scope (for delegated permissions) or Role (for app roles). */
        public ?string $type = null
    ) {}
}
