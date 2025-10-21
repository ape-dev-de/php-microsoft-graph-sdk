<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenoteSection
 */
class OnenoteSection
{
    /**
     * Indicates whether this is the user's default section. Read-only.
     */
    private ?bool $isDefault;

    /**
     * Links for opening the section. The oneNoteClientURL link opens the section in the OneNote native client if it's installed. The oneNoteWebURL link opens the section in OneNote on the web.
     */
    private ?string $links;

    /**
     * The pages endpoint where you can get details for all the pages in the section. Read-only.
     */
    private ?string $pagesUrl;

    /**
     * The collection of pages in the section.  Read-only. Nullable.
     */
    private array $pages = [];

    /**
     * The notebook that contains the section.  Read-only.
     */
    private ?string $parentNotebook;

    /**
     * The section group that contains the section.  Read-only.
     */
    private ?string $parentSectionGroup;


    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
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

    public function getPagesUrl(): ?string
    {
        return $this->pagesUrl;
    }

    public function setPagesUrl(?string $pagesUrl): self
    {
        $this->pagesUrl = $pagesUrl;
        return $this;
    }

    public function getPages(): array
    {
        return $this->pages;
    }

    public function setPages(array $pages): self
    {
        $this->pages = $pages;
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

}
