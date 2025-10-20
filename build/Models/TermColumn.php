<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermColumn
 */
class TermColumn
{
    /**
     * Specifies whether the column allows more than one value.
     */
    private ?bool $allowMultipleValues;

    /**
     * Specifies whether to display the entire term path or only the term label.
     */
    private ?bool $showFullyQualifiedName;

    /**
     */
    private ?string $parentTerm;

    /**
     */
    private ?string $termSet;

    public function getAllowMultipleValues(): ?bool
    {
        return $this->allowMultipleValues;
    }

    public function setAllowMultipleValues(?bool $allowMultipleValues): self
    {
        $this->allowMultipleValues = $allowMultipleValues;
        return $this;
    }

    public function getShowFullyQualifiedName(): ?bool
    {
        return $this->showFullyQualifiedName;
    }

    public function setShowFullyQualifiedName(?bool $showFullyQualifiedName): self
    {
        $this->showFullyQualifiedName = $showFullyQualifiedName;
        return $this;
    }

    public function getParentTerm(): ?string
    {
        return $this->parentTerm;
    }

    public function setParentTerm(?string $parentTerm): self
    {
        $this->parentTerm = $parentTerm;
        return $this;
    }

    public function getTermSet(): ?string
    {
        return $this->termSet;
    }

    public function setTermSet(?string $termSet): self
    {
        $this->termSet = $termSet;
        return $this;
    }

}
