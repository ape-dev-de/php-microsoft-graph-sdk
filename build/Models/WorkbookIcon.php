<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookIcon
 */
class WorkbookIcon
{
    /**
     * The index of the icon in the given set.
     */
    private ?float $index;

    /**
     * The set that the icon is part of. The possible values are: Invalid, ThreeArrows, ThreeArrowsGray, ThreeFlags, ThreeTrafficLights1, ThreeTrafficLights2, ThreeSigns, ThreeSymbols, ThreeSymbols2, FourArrows, FourArrowsGray, FourRedToBlack, FourRating, FourTrafficLights, FiveArrows, FiveArrowsGray, FiveRating, FiveQuarters, ThreeStars, ThreeTriangles, FiveBoxes.
     */
    private ?string $set;


    public function getIndex(): ?float
    {
        return $this->index;
    }

    public function setIndex(?float $index): self
    {
        $this->index = $index;
        return $this;
    }

    public function getSet(): ?string
    {
        return $this->set;
    }

    public function setSet(?string $set): self
    {
        $this->set = $set;
        return $this;
    }

}
