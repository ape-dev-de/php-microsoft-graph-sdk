<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Folder
 */
class Folder
{
    /**
     * Number of children contained immediately within this container.
     */
    private ?float $childCount;

    /**
     * A collection of properties defining the recommended view for the folder.
     */
    private ?string $view;

    public function getChildCount(): ?float
    {
        return $this->childCount;
    }

    public function setChildCount(?float $childCount): self
    {
        $this->childCount = $childCount;
        return $this;
    }

    public function getView(): ?string
    {
        return $this->view;
    }

    public function setView(?string $view): self
    {
        $this->view = $view;
        return $this;
    }

}
