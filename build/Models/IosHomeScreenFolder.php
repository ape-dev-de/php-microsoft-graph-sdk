<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolder
 */
class IosHomeScreenFolder
{
    /**
     * A folder containing pages of apps and web clips on the Home Screen.
     */
    private ?string $pages;

    public function getPages(): ?string
    {
        return $this->pages;
    }

    public function setPages(?string $pages): self
    {
        $this->pages = $pages;
        return $this;
    }

}
