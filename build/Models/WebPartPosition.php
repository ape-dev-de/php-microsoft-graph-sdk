<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartPosition
 */
class WebPartPosition
{
    /**
     * Indicates the identifier of the column where the web part is located.
     */
    private ?string $columnId;

    /**
     * Indicates the horizontal section where the web part is located.
     */
    private ?string $horizontalSectionId;

    /**
     * Indicates whether the web part is located in the vertical section.
     */
    private ?bool $isInVerticalSection;

    /**
     * Index of the current web part. Represents the order of the web part in this column or section.
     */
    private ?string $webPartIndex;


    public function getColumnId(): ?string
    {
        return $this->columnId;
    }

    public function setColumnId(?string $columnId): self
    {
        $this->columnId = $columnId;
        return $this;
    }

    public function getHorizontalSectionId(): ?string
    {
        return $this->horizontalSectionId;
    }

    public function setHorizontalSectionId(?string $horizontalSectionId): self
    {
        $this->horizontalSectionId = $horizontalSectionId;
        return $this;
    }

    public function getIsInVerticalSection(): ?bool
    {
        return $this->isInVerticalSection;
    }

    public function setIsInVerticalSection(?bool $isInVerticalSection): self
    {
        $this->isInVerticalSection = $isInVerticalSection;
        return $this;
    }

    public function getWebPartIndex(): ?string
    {
        return $this->webPartIndex;
    }

    public function setWebPartIndex(?string $webPartIndex): self
    {
        $this->webPartIndex = $webPartIndex;
        return $this;
    }

}
