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
     * @var string[]
     */
    private array $masterCategories = [];


    /**
     * @return string[]
     */
    public function getMasterCategories(): array
    {
        return $this->masterCategories;
    }

    /**
     * @param string[] $masterCategories
     */
    public function setMasterCategories(array $masterCategories): self
    {
        $this->masterCategories = $masterCategories;
        return $this;
    }

}
