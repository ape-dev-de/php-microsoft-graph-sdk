<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppRoleAssignment
 */
class AppRoleAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** The identifier (id) for the app role that''s assigned to the principal. This app role must be exposed in the appRoles property on the resource application''s service principal (resourceId). If the resource application hasn''t declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create. */
        public ?string $appRoleId = null,
        /** The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The display name of the user, group, or service principal that was granted the app role assignment. Maximum length is 256 characters. Read-only. Supports $filter (eq and startswith). */
        public ?string $principalDisplayName = null,
        /** The unique identifier (id) for the user, security group, or service principal being granted the app role. Security groups with dynamic memberships are supported. Required on create. */
        public ?string $principalId = null,
        /** The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only. */
        public ?string $principalType = null,
        /** The display name of the resource app's service principal to which the assignment is made. Maximum length is 256 characters. */
        public ?string $resourceDisplayName = null,
        /** The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only). */
        public ?string $resourceId = null
    ) {}
}
