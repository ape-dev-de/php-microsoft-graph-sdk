<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchEntity
 */
class SearchEntity
{
    /**
     * Administrative answer in Microsoft Search results to define common acronyms in an organization.
     */
    private array $acronyms = [];

    /**
     * Administrative answer in Microsoft Search results for common search queries in an organization.
     */
    private array $bookmarks = [];

    /**
     * Administrative answer in Microsoft Search results that provide answers for specific search keywords in an organization.
     */
    private ?string $qnas;

    public function getAcronyms(): array
    {
        return $this->acronyms;
    }

    public function setAcronyms(array $acronyms): self
    {
        $this->acronyms = $acronyms;
        return $this;
    }

    public function getBookmarks(): array
    {
        return $this->bookmarks;
    }

    public function setBookmarks(array $bookmarks): self
    {
        $this->bookmarks = $bookmarks;
        return $this;
    }

    public function getQnas(): ?string
    {
        return $this->qnas;
    }

    public function setQnas(?string $qnas): self
    {
        $this->qnas = $qnas;
        return $this;
    }

}
