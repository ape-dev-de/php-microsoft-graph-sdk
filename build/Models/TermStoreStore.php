<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreStore
 */
class TermStoreStore
{
    /**
     * Default language of the term store.
     */
    private ?string $defaultLanguageTag;

    /**
     * List of languages for the term store.
     */
    private ?string $languageTags;

    /**
     * Collection of all groups available in the term store.
     */
    private array $groups = [];

    /**
     * Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     */
    private ?string $sets;

    public function getDefaultLanguageTag(): ?string
    {
        return $this->defaultLanguageTag;
    }

    public function setDefaultLanguageTag(?string $defaultLanguageTag): self
    {
        $this->defaultLanguageTag = $defaultLanguageTag;
        return $this;
    }

    public function getLanguageTags(): ?string
    {
        return $this->languageTags;
    }

    public function setLanguageTags(?string $languageTags): self
    {
        $this->languageTags = $languageTags;
        return $this;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function setGroups(array $groups): self
    {
        $this->groups = $groups;
        return $this;
    }

    public function getSets(): ?string
    {
        return $this->sets;
    }

    public function setSets(?string $sets): self
    {
        $this->sets = $sets;
        return $this;
    }

}
