<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HorizontalSectionColumn
 */
class HorizontalSectionColumn
{
    /**
     * Width of the column. A horizontal section is divided into 12 grids. A column should have a value of 1-12 to represent its range spans. For example, there can be two columns both have a width of 6 in a section.
     */
    private ?float $width;

    /**
     * The collection of WebParts in this column.
     * @var string[]
     */
    private array $webparts = [];


    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebparts(): array
    {
        return $this->webparts;
    }

    /**
     * @param string[] $webparts
     */
    public function setWebparts(array $webparts): self
    {
        $this->webparts = $webparts;
        return $this;
    }

}
