<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SectionGroup
 */
class SectionGroup
{
    /**
     * The URL for the sectionGroups navigation property, which returns all the section groups in the section group. Read-only.
     */
    private ?string $sectionGroupsUrl;

    /**
     * The URL for the sections navigation property, which returns all the sections in the section group. Read-only.
     */
    private ?string $sectionsUrl;

    /**
     * The notebook that contains the section group. Read-only.
     */
    private ?string $parentNotebook;

    /**
     * The section group that contains the section group. Read-only.
     */
    private ?string $parentSectionGroup;

    /**
     * The section groups in the section. Read-only. Nullable.
     */
    private array $sectionGroups = [];

    /**
     * The sections in the section group. Read-only. Nullable.
     */
    private ?string $sections;

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

    public function getParentNotebook(): ?string
    {
        return $this->parentNotebook;
    }

    public function setParentNotebook(?string $parentNotebook): self
    {
        $this->parentNotebook = $parentNotebook;
        return $this;
    }

    public function getParentSectionGroup(): ?string
    {
        return $this->parentSectionGroup;
    }

    public function setParentSectionGroup(?string $parentSectionGroup): self
    {
        $this->parentSectionGroup = $parentSectionGroup;
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
