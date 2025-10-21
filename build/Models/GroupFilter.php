<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupFilter
 */
class GroupFilter
{
    /**
     * @var string[]
     */
    private array $includedGroups = [];


    /**
     * @return string[]
     */
    public function getIncludedGroups(): array
    {
        return $this->includedGroups;
    }

    /**
     * @param string[] $includedGroups
     */
    public function setIncludedGroups(array $includedGroups): self
    {
        $this->includedGroups = $includedGroups;
        return $this;
    }

}
