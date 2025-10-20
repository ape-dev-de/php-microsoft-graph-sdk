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
     */
    private ?string $views;

    public function getViews(): ?string
    {
        return $this->views;
    }

    public function setViews(?string $views): self
    {
        $this->views = $views;
        return $this;
    }

}
