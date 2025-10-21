<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPage
 */
class AuthenticationAttributeCollectionPage
{
    /**
     * A collection of displays of the attribute collection page.
     * @var string[]
     */
    private array $views = [];


    /**
     * @return string[]
     */
    public function getViews(): array
    {
        return $this->views;
    }

    /**
     * @param string[] $views
     */
    public function setViews(array $views): self
    {
        $this->views = $views;
        return $this;
    }

}
