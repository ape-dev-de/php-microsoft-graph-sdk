<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanAppliedCategory
 */
class SecurityFilePlanAppliedCategory
{
    /**
     * Represents the file plan descriptor for a subcategory under a specific category, which has been assigned to a particular retention label.
     */
    private ?string $subcategory;


    public function getSubcategory(): ?string
    {
        return $this->subcategory;
    }

    public function setSubcategory(?string $subcategory): self
    {
        $this->subcategory = $subcategory;
        return $this;
    }

}
