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
     * @var string[]
     */
    private array $languageTags = [];

    /**
     * Collection of all groups available in the term store.
     */
    private array $groups = [];

    /**
     * Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     * @var string[]
     */
    private array $sets = [];


    public function getDefaultLanguageTag(): ?string
    {
        return $this->defaultLanguageTag;
    }

    public function setDefaultLanguageTag(?string $defaultLanguageTag): self
    {
        $this->defaultLanguageTag = $defaultLanguageTag;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLanguageTags(): array
    {
        return $this->languageTags;
    }

    /**
     * @param string[] $languageTags
     */
    public function setLanguageTags(array $languageTags): self
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

    /**
     * @return string[]
     */
    public function getSets(): array
    {
        return $this->sets;
    }

    /**
     * @param string[] $sets
     */
    public function setSets(array $sets): self
    {
        $this->sets = $sets;
        return $this;
    }

}
