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
     * @var string[]
     */
    private array $pages = [];


    /**
     * @return string[]
     */
    public function getPages(): array
    {
        return $this->pages;
    }

    /**
     * @param string[] $pages
     */
    public function setPages(array $pages): self
    {
        $this->pages = $pages;
        return $this;
    }

}
