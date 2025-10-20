<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleDefinition
 */
class UnifiedRoleDefinition
{
    /**
     * The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true.
     */
    private ?string $description;

    /**
     * The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq, in).
     */
    private ?string $displayName;

    /**
     * Flag indicating whether the role definition is part of the default set included in Microsoft Entra or a custom definition. Read-only. Supports $filter (eq, in).
     */
    private ?bool $isBuiltIn;

    /**
     * Flag indicating whether the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true.
     */
    private ?bool $isEnabled;

    /**
     * List of the scopes or permissions the role definition applies to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This will be deprecated soon. Attach scope to role assignment.
     */
    private ?string $resourceScopes;

    /**
     * List of permissions included in the role. Read-only when isBuiltIn is true. Required.
     */
    private array $rolePermissions = [];

    /**
     * Custom template identifier that can be set when isBuiltIn is false but is read-only when isBuiltIn is true. This identifier is typically used if one needs an identifier to be the same across different directories.
     */
    private ?string $templateId;

    /**
     * Indicates version of the role definition. Read-only when isBuiltIn is true.
     */
    private ?string $version;

    /**
     * Read-only collection of role definitions that the given role definition inherits from. Only Microsoft Entra built-in roles (isBuiltIn is true) support this attribute. Supports $expand.
     */
    private ?string $inheritsPermissionsFrom;

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

    public function getIsBuiltIn(): ?bool
    {
        return $this->isBuiltIn;
    }

    public function setIsBuiltIn(?bool $isBuiltIn): self
    {
        $this->isBuiltIn = $isBuiltIn;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getResourceScopes(): ?string
    {
        return $this->resourceScopes;
    }

    public function setResourceScopes(?string $resourceScopes): self
    {
        $this->resourceScopes = $resourceScopes;
        return $this;
    }

    public function getRolePermissions(): array
    {
        return $this->rolePermissions;
    }

    public function setRolePermissions(array $rolePermissions): self
    {
        $this->rolePermissions = $rolePermissions;
        return $this;
    }

    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getInheritsPermissionsFrom(): ?string
    {
        return $this->inheritsPermissionsFrom;
    }

    public function setInheritsPermissionsFrom(?string $inheritsPermissionsFrom): self
    {
        $this->inheritsPermissionsFrom = $inheritsPermissionsFrom;
        return $this;
    }

}
