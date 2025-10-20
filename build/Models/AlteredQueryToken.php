<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlteredQueryToken
 */
class AlteredQueryToken
{
    /**
     * Defines the length of a changed segment.
     */
    private ?float $length;

    /**
     * Defines the offset of a changed segment.
     */
    private ?float $offset;

    /**
     * Represents the corrected segment string.
     */
    private ?string $suggestion;

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): self
    {
        $this->length = $length;
        return $this;
    }

    public function getOffset(): ?float
    {
        return $this->offset;
    }

    public function setOffset(?float $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    public function getSuggestion(): ?string
    {
        return $this->suggestion;
    }

    public function setSuggestion(?string $suggestion): self
    {
        $this->suggestion = $suggestion;
        return $this;
    }

}
