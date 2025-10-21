<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TextColumn
 */
class TextColumn
{
    /**
     * Whether to allow multiple lines of text.
     */
    private ?bool $allowMultipleLines;

    /**
     * Whether updates to this column should replace existing text, or append to it.
     */
    private ?bool $appendChangesToExistingText;

    /**
     * The size of the text box.
     */
    private ?float $linesForEditing;

    /**
     * The maximum number of characters for the value.
     */
    private ?float $maxLength;

    /**
     * The type of text being stored. Must be one of plain or richText
     */
    private ?string $textType;


    public function getAllowMultipleLines(): ?bool
    {
        return $this->allowMultipleLines;
    }

    public function setAllowMultipleLines(?bool $allowMultipleLines): self
    {
        $this->allowMultipleLines = $allowMultipleLines;
        return $this;
    }

    public function getAppendChangesToExistingText(): ?bool
    {
        return $this->appendChangesToExistingText;
    }

    public function setAppendChangesToExistingText(?bool $appendChangesToExistingText): self
    {
        $this->appendChangesToExistingText = $appendChangesToExistingText;
        return $this;
    }

    public function getLinesForEditing(): ?float
    {
        return $this->linesForEditing;
    }

    public function setLinesForEditing(?float $linesForEditing): self
    {
        $this->linesForEditing = $linesForEditing;
        return $this;
    }

    public function getMaxLength(): ?float
    {
        return $this->maxLength;
    }

    public function setMaxLength(?float $maxLength): self
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    public function getTextType(): ?string
    {
        return $this->textType;
    }

    public function setTextType(?string $textType): self
    {
        $this->textType = $textType;
        return $this;
    }

}
