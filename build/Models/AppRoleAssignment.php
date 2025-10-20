<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppRoleAssignment
 */
class AppRoleAssignment
{
    /**
     * The identifier (id) for the app role that''s assigned to the principal. This app role must be exposed in the appRoles property on the resource application''s service principal (resourceId). If the resource application hasn''t declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
     */
    private ?string $appRoleId;

    /**
     * The time when the app role assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The display name of the user, group, or service principal that was granted the app role assignment. Maximum length is 256 characters. Read-only. Supports $filter (eq and startswith).
     */
    private ?string $principalDisplayName;

    /**
     * The unique identifier (id) for the user, security group, or service principal being granted the app role. Security groups with dynamic memberships are supported. Required on create.
     */
    private ?string $principalId;

    /**
     * The type of the assigned principal. This can either be User, Group, or ServicePrincipal. Read-only.
     */
    private ?string $principalType;

    /**
     * The display name of the resource app's service principal to which the assignment is made. Maximum length is 256 characters.
     */
    private ?string $resourceDisplayName;

    /**
     * The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
     */
    private ?string $resourceId;

    public function getAppRoleId(): ?string
    {
        return $this->appRoleId;
    }

    public function setAppRoleId(?string $appRoleId): self
    {
        $this->appRoleId = $appRoleId;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getPrincipalDisplayName(): ?string
    {
        return $this->principalDisplayName;
    }

    public function setPrincipalDisplayName(?string $principalDisplayName): self
    {
        $this->principalDisplayName = $principalDisplayName;
        return $this;
    }

    public function getPrincipalId(): ?string
    {
        return $this->principalId;
    }

    public function setPrincipalId(?string $principalId): self
    {
        $this->principalId = $principalId;
        return $this;
    }

    public function getPrincipalType(): ?string
    {
        return $this->principalType;
    }

    public function setPrincipalType(?string $principalType): self
    {
        $this->principalType = $principalType;
        return $this;
    }

    public function getResourceDisplayName(): ?string
    {
        return $this->resourceDisplayName;
    }

    public function setResourceDisplayName(?string $resourceDisplayName): self
    {
        $this->resourceDisplayName = $resourceDisplayName;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

}
