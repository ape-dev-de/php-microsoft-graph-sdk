<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryRole
 */
class DirectoryRole
{
    /**
     * The description for the directory role. Read-only. Supports $filter (eq), $search, $select.
     */
    private ?string $description;

    /**
     * The display name for the directory role. Read-only. Supports $filter (eq), $search, $select.
     */
    private ?string $displayName;

    /**
     * The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select.
     */
    private ?string $roleTemplateId;

    /**
     * Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand.
     */
    private array $members = [];

    /**
     * Members of this directory role that are scoped to administrative units. Read-only. Nullable.
     */
    private ?string $scopedMembers;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getRoleTemplateId(): ?string
    {
        return $this->roleTemplateId;
    }

    public function setRoleTemplateId(?string $roleTemplateId): self
    {
        $this->roleTemplateId = $roleTemplateId;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    public function getScopedMembers(): ?string
    {
        return $this->scopedMembers;
    }

    public function setScopedMembers(?string $scopedMembers): self
    {
        $this->scopedMembers = $scopedMembers;
        return $this;
    }

}
