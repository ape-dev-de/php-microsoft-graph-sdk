<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeFont
 */
class WorkbookRangeFont
{
    /**
     * Inidicates whether the font is bold.
     */
    private ?bool $bold;

    /**
     * The HTML color code representation of the text color. For example, #FF0000 represents the color red.
     */
    private ?string $color;

    /**
     * Inidicates whether the font is italic.
     */
    private ?bool $italic;

    /**
     * The font name. For example, ''Calibri''.
     */
    private ?string $name;

    /**
     * The font size.
     */
    private ?string $size;

    /**
     * The type of underlining applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
     */
    private ?string $underline;


    public function getBold(): ?bool
    {
        return $this->bold;
    }

    public function setBold(?bool $bold): self
    {
        $this->bold = $bold;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getItalic(): ?bool
    {
        return $this->italic;
    }

    public function setItalic(?bool $italic): self
    {
        $this->italic = $italic;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getUnderline(): ?string
    {
        return $this->underline;
    }

    public function setUnderline(?string $underline): self
    {
        $this->underline = $underline;
        return $this;
    }

}
