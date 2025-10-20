<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookUser
 */
class OutlookUser
{
    /**
     * A list of categories defined for the user.
     */
    private ?string $masterCategories;

    public function getMasterCategories(): ?string
    {
        return $this->masterCategories;
    }

    public function setMasterCategories(?string $masterCategories): self
    {
        $this->masterCategories = $masterCategories;
        return $this;
    }

}
