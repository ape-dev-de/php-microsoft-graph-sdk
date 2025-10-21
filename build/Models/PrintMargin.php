<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintMargin
 */
class PrintMargin
{
    /**
     * The margin in microns from the bottom edge.
     */
    private ?float $bottom;

    /**
     * The margin in microns from the left edge.
     */
    private ?float $left;

    /**
     * The margin in microns from the right edge.
     */
    private ?float $right;

    /**
     * The margin in microns from the top edge.
     */
    private ?string $top;


    public function getBottom(): ?float
    {
        return $this->bottom;
    }

    public function setBottom(?float $bottom): self
    {
        $this->bottom = $bottom;
        return $this;
    }

    public function getLeft(): ?float
    {
        return $this->left;
    }

    public function setLeft(?float $left): self
    {
        $this->left = $left;
        return $this;
    }

    public function getRight(): ?float
    {
        return $this->right;
    }

    public function setRight(?float $right): self
    {
        $this->right = $right;
        return $this;
    }

    public function getTop(): ?string
    {
        return $this->top;
    }

    public function setTop(?string $top): self
    {
        $this->top = $top;
        return $this;
    }

}
