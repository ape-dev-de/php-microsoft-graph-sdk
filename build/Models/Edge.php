<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Edge
 */
class Edge
{
    /**
     * A container for Internet Explorer mode resources.
     */
    private ?string $internetExplorerMode;


    public function getInternetExplorerMode(): ?string
    {
        return $this->internetExplorerMode;
    }

    public function setInternetExplorerMode(?string $internetExplorerMode): self
    {
        $this->internetExplorerMode = $internetExplorerMode;
        return $this;
    }

}
