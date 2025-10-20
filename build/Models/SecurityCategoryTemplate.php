<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCategoryTemplate
 */
class SecurityCategoryTemplate
{
    /**
     * Represents all subcategories under a particular category.
     */
    private ?string $subcategories;

    public function getSubcategories(): ?string
    {
        return $this->subcategories;
    }

    public function setSubcategories(?string $subcategories): self
    {
        $this->subcategories = $subcategories;
        return $this;
    }

}
