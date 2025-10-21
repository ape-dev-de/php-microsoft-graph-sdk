<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Onenote
 */
class Onenote
{
    /**
     * The collection of OneNote notebooks that are owned by the user or group. Read-only. Nullable.
     */
    private array $notebooks = [];

    /**
     * The status of OneNote operations. Getting an operations collection isn''t supported, but you can get the status of long-running operations if the Operation-Location header is returned in the response. Read-only. Nullable.
     */
    private array $operations = [];

    /**
     * The pages in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     */
    private array $pages = [];

    /**
     * The image and other file resources in OneNote pages. Getting a resources collection isn''t supported, but you can get the binary content of a specific resource. Read-only. Nullable.
     */
    private array $resources = [];

    /**
     * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     */
    private array $sectionGroups = [];

    /**
     * The sections in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @var string[]
     */
    private array $sections = [];


    public function getNotebooks(): array
    {
        return $this->notebooks;
    }

    public function setNotebooks(array $notebooks): self
    {
        $this->notebooks = $notebooks;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
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

    public function getResources(): array
    {
        return $this->resources;
    }

    public function setResources(array $resources): self
    {
        $this->resources = $resources;
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

    /**
     * @return string[]
     */
    public function getSections(): array
    {
        return $this->sections;
    }

    /**
     * @param string[] $sections
     */
    public function setSections(array $sections): self
    {
        $this->sections = $sections;
        return $this;
    }

}
