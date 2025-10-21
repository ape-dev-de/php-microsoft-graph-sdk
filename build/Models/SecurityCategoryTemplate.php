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
     * @var string[]
     */
    private array $subcategories = [];


    /**
     * @return string[]
     */
    public function getSubcategories(): array
    {
        return $this->subcategories;
    }

    /**
     * @param string[] $subcategories
     */
    public function setSubcategories(array $subcategories): self
    {
        $this->subcategories = $subcategories;
        return $this;
    }

}
