<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Notebook
 */
class Notebook
{
    /**
     * Indicates whether this is the user's default notebook. Read-only.
     */
    private ?bool $isDefault;

    /**
     * Indicates whether the notebook is shared. If true, the contents of the notebook can be seen by people other than the owner. Read-only.
     */
    private ?bool $isShared;

    /**
     * Links for opening the notebook. The oneNoteClientURL link opens the notebook in the OneNote native client if it's installed. The oneNoteWebURL link opens the notebook in OneNote on the web.
     */
    private ?string $links;

    /**
     * The URL for the sectionGroups navigation property, which returns all the section groups in the notebook. Read-only.
     */
    private ?string $sectionGroupsUrl;

    /**
     * The URL for the sections navigation property, which returns all the sections in the notebook. Read-only.
     */
    private ?string $sectionsUrl;

    /**
     * Possible values are: Owner, Contributor, Reader, None. Owner represents owner-level access to the notebook. Contributor represents read/write access to the notebook. Reader represents read-only access to the notebook. Read-only.
     */
    private ?string $userRole;

    /**
     * The section groups in the notebook. Read-only. Nullable.
     */
    private array $sectionGroups = [];

    /**
     * The sections in the notebook. Read-only. Nullable.
     */
    private ?string $sections;

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

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;
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

    public function getUserRole(): ?string
    {
        return $this->userRole;
    }

    public function setUserRole(?string $userRole): self
    {
        $this->userRole = $userRole;
        return $this;
    }

    public function getSectionGroups(): array
    {
        return $this->sectionGroups;
    }

    public function setSectionGroups(array $sectionGroups): self
    {
        $this->sectionGroups = $sectionGroups;
        return $this;
    }

    public function getSections(): ?string
    {
        return $this->sections;
    }

    public function setSections(?string $sections): self
    {
        $this->sections = $sections;
        return $this;
    }

}
