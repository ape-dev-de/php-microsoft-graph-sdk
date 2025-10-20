<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreTerm
 */
class TermStoreTerm
{
    /**
     * Date and time of term creation. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description about term that is dependent on the languageTag.
     */
    private array $descriptions = [];

    /**
     * Label metadata for a term.
     */
    private array $labels = [];

    /**
     * Last date and time of term modification. Read-only.
     */
    private array $lastModifiedDateTime = [];

    /**
     * Collection of properties on the term.
     */
    private ?string $items;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    public function setDescriptions(array $descriptions): self
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    public function getLastModifiedDateTime(): array
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(array $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getItems(): ?string
    {
        return $this->items;
    }

    public function setItems(?string $items): self
    {
        $this->items = $items;
        return $this;
    }

}
