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
     * @var string[]
     */
    private array $qnas = [];


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

    /**
     * @return string[]
     */
    public function getQnas(): array
    {
        return $this->qnas;
    }

    /**
     * @param string[] $qnas
     */
    public function setQnas(array $qnas): self
    {
        $this->qnas = $qnas;
        return $this;
    }

}
