<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceEnvironment
 */
class AccessPackageResourceEnvironment
{
    /**
     * Connection information of an environment used to connect to a resource.
     */
    private ?string $connectionInfo;

    /**
     * The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of this object.
     */
    private ?string $description;

    /**
     * The display name of this object.
     */
    private ?string $displayName;

    /**
     * Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications.
     */
    private ?bool $isDefaultEnvironment;

    /**
     * The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * The unique identifier of this environment in the origin system.
     */
    private ?string $originId;

    /**
     * The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
     */
    private ?string $originSystem;

    /**
     * Read-only. Required.
     */
    private ?string $resources;

    public function getConnectionInfo(): ?string
    {
        return $this->connectionInfo;
    }

    public function setConnectionInfo(?string $connectionInfo): self
    {
        $this->connectionInfo = $connectionInfo;
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

    public function getIsDefaultEnvironment(): ?bool
    {
        return $this->isDefaultEnvironment;
    }

    public function setIsDefaultEnvironment(?bool $isDefaultEnvironment): self
    {
        $this->isDefaultEnvironment = $isDefaultEnvironment;
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

    public function getResources(): ?string
    {
        return $this->resources;
    }

    public function setResources(?string $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

}
