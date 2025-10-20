<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetExplorerMode
 */
class InternetExplorerMode
{
    /**
     * A collection of site lists to support Internet Explorer mode.
     */
    private ?string $siteLists;

    public function getSiteLists(): ?string
    {
        return $this->siteLists;
    }

    public function setSiteLists(?string $siteLists): self
    {
        $this->siteLists = $siteLists;
        return $this;
    }

}
