<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetResource
 */
class TargetResource
{
    /**
     * Indicates the visible name defined for the resource. Typically specified when the resource is created.
     */
    private ?string $displayName;

    /**
     * When type is set to Group, this indicates the group type. Possible values are: unifiedGroups, azureAD, and unknownFutureValue
     */
    private ?string $groupType;

    /**
     * Indicates the unique ID of the resource.
     */
    private ?string $id;

    /**
     * Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type.
     */
    private array $modifiedProperties = [];

    /**
     * Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User.
     */
    private ?string $type;

    /**
     * When type is set to User, this includes the user name that initiated the action; null for other types.
     */
    private ?string $userPrincipalName;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getGroupType(): ?string
    {
        return $this->groupType;
    }

    public function setGroupType(?string $groupType): self
    {
        $this->groupType = $groupType;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getModifiedProperties(): array
    {
        return $this->modifiedProperties;
    }

    public function setModifiedProperties(array $modifiedProperties): self
    {
        $this->modifiedProperties = $modifiedProperties;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
