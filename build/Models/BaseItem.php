<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseItem
 */
class BaseItem
{
    /**
     * Identity of the user, device, or application that created the item. Read-only.
     */
    private ?string $createdBy;

    /**
     * Date and time of item creation. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Provides a user-visible description of the item. Optional.
     */
    private ?string $description;

    /**
     * ETag for the item. Read-only.
     */
    private ?string $eTag;

    /**
     * Identity of the user, device, and application that last modified the item. Read-only.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time the item was last modified. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The name of the item. Read-write.
     */
    private ?string $name;

    /**
     * Parent information, if the item has a parent. Read-write.
     */
    private ?string $parentReference;

    /**
     * URL that either displays the resource in the browser (for Office file formats), or is a direct link to the file (for other formats). Read-only.
     */
    private ?string $webUrl;

    /**
     * Identity of the user who created the item. Read-only.
     */
    private ?string $createdByUser;

    /**
     * Identity of the user who last modified the item. Read-only.
     */
    private ?string $lastModifiedByUser;


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

    public function getETag(): ?string
    {
        return $this->eTag;
    }

    public function setETag(?string $eTag): self
    {
        $this->eTag = $eTag;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getParentReference(): ?string
    {
        return $this->parentReference;
    }

    public function setParentReference(?string $parentReference): self
    {
        $this->parentReference = $parentReference;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getCreatedByUser(): ?string
    {
        return $this->createdByUser;
    }

    public function setCreatedByUser(?string $createdByUser): self
    {
        $this->createdByUser = $createdByUser;
        return $this;
    }

    public function getLastModifiedByUser(): ?string
    {
        return $this->lastModifiedByUser;
    }

    public function setLastModifiedByUser(?string $lastModifiedByUser): self
    {
        $this->lastModifiedByUser = $lastModifiedByUser;
        return $this;
    }

}
