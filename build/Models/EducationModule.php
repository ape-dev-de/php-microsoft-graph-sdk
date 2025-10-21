<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationModule
 */
class EducationModule
{
    /**
     * The display name of the user that created the module.
     */
    private ?string $createdBy;

    /**
     * Date time the module was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description of the module.
     */
    private ?string $description;

    /**
     * Name of the module.
     */
    private ?string $displayName;

    /**
     * Indicates whether the module is pinned or not.
     */
    private ?bool $isPinned;

    /**
     * The last user that modified the module.
     */
    private ?string $lastModifiedBy;

    /**
     * Date time the module was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Folder URL where all the file resources for this module are stored.
     */
    private ?string $resourcesFolderUrl;

    /**
     * Status of the module. You can''t use a PATCH operation to update this value. Possible values are: draft and published.
     */
    private ?string $status;

    /**
     * Learning objects that are associated with this module. Only teachers can modify this list. Nullable.
     * @var string[]
     */
    private array $resources = [];


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getIsPinned(): ?bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(?bool $isPinned): self
    {
        $this->isPinned = $isPinned;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getResourcesFolderUrl(): ?string
    {
        return $this->resourcesFolderUrl;
    }

    public function setResourcesFolderUrl(?string $resourcesFolderUrl): self
    {
        $this->resourcesFolderUrl = $resourcesFolderUrl;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * @param string[] $resources
     */
    public function setResources(array $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

}
