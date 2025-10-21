<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAlteration
 */
class SearchAlteration
{
    /**
     * Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is: /ue000, /ue001.
     */
    private ?string $alteredHighlightedQueryString;

    /**
     * Defines the altered query string with spelling correction.
     */
    private ?string $alteredQueryString;

    /**
     * Represents changed segments related to an original user query.
     * @var string[]
     */
    private array $alteredQueryTokens = [];


    public function getAlteredHighlightedQueryString(): ?string
    {
        return $this->alteredHighlightedQueryString;
    }

    public function setAlteredHighlightedQueryString(?string $alteredHighlightedQueryString): self
    {
        $this->alteredHighlightedQueryString = $alteredHighlightedQueryString;
        return $this;
    }

    public function getAlteredQueryString(): ?string
    {
        return $this->alteredQueryString;
    }

    public function setAlteredQueryString(?string $alteredQueryString): self
    {
        $this->alteredQueryString = $alteredQueryString;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAlteredQueryTokens(): array
    {
        return $this->alteredQueryTokens;
    }

    /**
     * @param string[] $alteredQueryTokens
     */
    public function setAlteredQueryTokens(array $alteredQueryTokens): self
    {
        $this->alteredQueryTokens = $alteredQueryTokens;
        return $this;
    }

}
