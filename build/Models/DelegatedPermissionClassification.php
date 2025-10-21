<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedPermissionClassification
 */
class DelegatedPermissionClassification
{
    /**
     * The classification value. Possible values: low, medium (preview), high (preview). Doesn''t support $filter.
     */
    private ?string $classification;

    /**
     * The unique identifier (id) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Required on create. Doesn't support $filter.
     */
    private ?string $permissionId;

    /**
     * The claim value (value) for the delegated permission listed in the oauth2PermissionScopes collection of the servicePrincipal. Doesn't support $filter.
     */
    private ?string $permissionName;


    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    public function getPermissionId(): ?string
    {
        return $this->permissionId;
    }

    public function setPermissionId(?string $permissionId): self
    {
        $this->permissionId = $permissionId;
        return $this;
    }

    public function getPermissionName(): ?string
    {
        return $this->permissionName;
    }

    public function setPermissionName(?string $permissionName): self
    {
        $this->permissionName = $permissionName;
        return $this;
    }

}
