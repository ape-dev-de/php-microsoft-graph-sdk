<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeBorder
 */
class WorkbookRangeBorder
{
    /**
     * The HTML color code that represents the color of the border line. Can either be of the form #RRGGBB, for example ''FFA500'', or a named HTML color, for example ''orange''.
     */
    private ?string $color;

    /**
     * Indicates the specific side of the border. The possible values are: EdgeTop, EdgeBottom, EdgeLeft, EdgeRight, InsideVertical, InsideHorizontal, DiagonalDown, DiagonalUp. Read-only.
     */
    private ?string $sideIndex;

    /**
     * Indicates the line style for the border. The possible values are: None, Continuous, Dash, DashDot, DashDotDot, Dot, Double, SlantDashDot.
     */
    private ?string $style;

    /**
     * The weight of the border around a range. The possible values are: Hairline, Thin, Medium, Thick.
     */
    private ?string $weight;


    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getSideIndex(): ?string
    {
        return $this->sideIndex;
    }

    public function setSideIndex(?string $sideIndex): self
    {
        $this->sideIndex = $sideIndex;
        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(?string $style): self
    {
        $this->style = $style;
        return $this;
    }

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

}
