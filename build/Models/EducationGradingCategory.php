<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationGradingCategory
 */
class EducationGradingCategory
{
    /**
     * The name of the grading category.
     */
    private ?string $displayName;

    /**
     * The weight of the category; an integer between 0 and 100.
     */
    private ?string $percentageWeight;


    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getPercentageWeight(): ?string
    {
        return $this->percentageWeight;
    }

    public function setPercentageWeight(?string $percentageWeight): self
    {
        $this->percentageWeight = $percentageWeight;
        return $this;
    }

}
