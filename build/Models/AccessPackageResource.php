<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResource
 */
class AccessPackageResource
{
    /**
     * Contains information about the attributes to be collected from the requestor and sent to the resource application.
     */
    private array $attributes = [];

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * A description for the resource.
     */
    private ?string $description;

    /**
     * The display name of the resource, such as the application name, group name or site name.
     */
    private ?string $displayName;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * The unique identifier of the resource in the origin system. For a Microsoft Entra group, this is the identifier of the group.
     */
    private ?string $originId;

    /**
     * The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     */
    private ?string $originSystem;

    /**
     * Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     */
    private ?string $environment;

    /**
     * Read-only. Nullable. Supports $expand.
     */
    private array $roles = [];

    /**
     * Read-only. Nullable. Supports $expand.
     */
    private ?string $scopes;

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;
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

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getOriginId(): ?string
    {
        return $this->originId;
    }

    public function setOriginId(?string $originId): self
    {
        $this->originId = $originId;
        return $this;
    }

    public function getOriginSystem(): ?string
    {
        return $this->originSystem;
    }

    public function setOriginSystem(?string $originSystem): self
    {
        $this->originSystem = $originSystem;
        return $this;
    }

    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    public function setEnvironment(?string $environment): self
    {
        $this->environment = $environment;
        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getScopes(): ?string
    {
        return $this->scopes;
    }

    public function setScopes(?string $scopes): self
    {
        $this->scopes = $scopes;
        return $this;
    }

}
