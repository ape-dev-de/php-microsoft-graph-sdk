<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopyNotebookModel
 */
class CopyNotebookModel
{
    /**
     */
    private ?string $createdBy;

    /**
     */
    private ?string $createdByIdentity;

    /**
     */
    private ?\DateTimeInterface $createdTime;

    /**
     */
    private ?string $id;

    /**
     */
    private ?bool $isDefault;

    /**
     */
    private ?bool $isShared;

    /**
     */
    private ?string $lastModifiedBy;

    /**
     */
    private ?string $lastModifiedByIdentity;

    /**
     */
    private ?\DateTimeInterface $lastModifiedTime;

    /**
     */
    private ?string $links;

    /**
     */
    private ?string $name;

    /**
     */
    private ?string $sectionGroupsUrl;

    /**
     */
    private ?string $sectionsUrl;

    /**
     */
    private ?string $self;

    /**
     */
    private ?string $userRole;

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedByIdentity(): ?string
    {
        return $this->createdByIdentity;
    }

    public function setCreatedByIdentity(?string $createdByIdentity): self
    {
        $this->createdByIdentity = $createdByIdentity;
        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->createdTime;
    }

    public function setCreatedTime(?\DateTimeInterface $createdTime): self
    {
        $this->createdTime = $createdTime;
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

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;
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

    public function getLastModifiedByIdentity(): ?string
    {
        return $this->lastModifiedByIdentity;
    }

    public function setLastModifiedByIdentity(?string $lastModifiedByIdentity): self
    {
        $this->lastModifiedByIdentity = $lastModifiedByIdentity;
        return $this;
    }

    public function getLastModifiedTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedTime;
    }

    public function setLastModifiedTime(?\DateTimeInterface $lastModifiedTime): self
    {
        $this->lastModifiedTime = $lastModifiedTime;
        return $this;
    }

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;
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

    public function getSectionGroupsUrl(): ?string
    {
        return $this->sectionGroupsUrl;
    }

    public function setSectionGroupsUrl(?string $sectionGroupsUrl): self
    {
        $this->sectionGroupsUrl = $sectionGroupsUrl;
        return $this;
    }

    public function getSectionsUrl(): ?string
    {
        return $this->sectionsUrl;
    }

    public function setSectionsUrl(?string $sectionsUrl): self
    {
        $this->sectionsUrl = $sectionsUrl;
        return $this;
    }

    public function getSelf(): ?string
    {
        return $this->self;
    }

    public function setSelf(?string $self): self
    {
        $this->self = $self;
        return $this;
    }

    public function getUserRole(): ?string
    {
        return $this->userRole;
    }

    public function setUserRole(?string $userRole): self
    {
        $this->userRole = $userRole;
        return $this;
    }

}
