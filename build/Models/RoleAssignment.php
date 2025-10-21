<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleAssignment
 */
class RoleAssignment
{
    /**
     * Description of the Role Assignment.
     */
    private ?string $description;

    /**
     * The display or friendly name of the role Assignment.
     */
    private ?string $displayName;

    /**
     * List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     * @var string[]
     */
    private array $resourceScopes = [];

    /**
     * The Role Assignment resource. Role assignments tie together a role definition with members and scopes. There can be one or more role assignments per role. This applies to custom and built-in roles.
     */
    private ?string $roleDefinition;


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

    /**
     * @return string[]
     */
    public function getResourceScopes(): array
    {
        return $this->resourceScopes;
    }

    /**
     * @param string[] $resourceScopes
     */
    public function setResourceScopes(array $resourceScopes): self
    {
        $this->resourceScopes = $resourceScopes;
        return $this;
    }

    public function getRoleDefinition(): ?string
    {
        return $this->roleDefinition;
    }

    public function setRoleDefinition(?string $roleDefinition): self
    {
        $this->roleDefinition = $roleDefinition;
        return $this;
    }

}
