<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreSet
 */
class TermStoreSet
{
    /**
     * Date and time of set creation. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description that gives details on the term usage.
     */
    private ?string $description;

    /**
     * Name of the set for each languageTag.
     */
    private array $localizedNames = [];

    /**
     * Custom properties for the set.
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getLocalizedNames(): array
    {
        return $this->localizedNames;
    }

    public function setLocalizedNames(array $localizedNames): self
    {
        $this->localizedNames = $localizedNames;
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
