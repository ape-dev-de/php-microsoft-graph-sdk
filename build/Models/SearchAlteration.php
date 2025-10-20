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
     */
    private ?string $alteredQueryTokens;

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

    public function getAlteredQueryTokens(): ?string
    {
        return $this->alteredQueryTokens;
    }

    public function setAlteredQueryTokens(?string $alteredQueryTokens): self
    {
        $this->alteredQueryTokens = $alteredQueryTokens;
        return $this;
    }

}
