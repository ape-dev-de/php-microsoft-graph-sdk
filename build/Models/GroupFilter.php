<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupFilter
 */
class GroupFilter
{
    /**
     */
    private ?string $includedGroups;

    public function getIncludedGroups(): ?string
    {
        return $this->includedGroups;
    }

    public function setIncludedGroups(?string $includedGroups): self
    {
        $this->includedGroups = $includedGroups;
        return $this;
    }

}
