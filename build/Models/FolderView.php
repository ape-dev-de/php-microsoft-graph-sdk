<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FolderView
 */
class FolderView
{
    /**
     * The method by which the folder should be sorted.
     */
    private ?string $sortBy;

    /**
     * If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
     */
    private ?string $sortOrder;

    /**
     * The type of view that should be used to represent the folder.
     */
    private ?string $viewType;

    public function getSortBy(): ?string
    {
        return $this->sortBy;
    }

    public function setSortBy(?string $sortBy): self
    {
        $this->sortBy = $sortBy;
        return $this;
    }

    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    public function setSortOrder(?string $sortOrder): self
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    public function getViewType(): ?string
    {
        return $this->viewType;
    }

    public function setViewType(?string $viewType): self
    {
        $this->viewType = $viewType;
        return $this;
    }

}
