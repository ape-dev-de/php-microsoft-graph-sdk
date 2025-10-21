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
     * @var string[]
     */
    private array $siteLists = [];


    /**
     * @return string[]
     */
    public function getSiteLists(): array
    {
        return $this->siteLists;
    }

    /**
     * @param string[] $siteLists
     */
    public function setSiteLists(array $siteLists): self
    {
        $this->siteLists = $siteLists;
        return $this;
    }

}
