<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchQuery
 */
class SearchQuery
{
    /**
     * The search query containing the search terms. Required.
     */
    private ?string $queryString;

    /**
     * Provides a way to decorate the query string. Supports both KQL and query variables. Optional.
     */
    private ?string $queryTemplate;


    public function getQueryString(): ?string
    {
        return $this->queryString;
    }

    public function setQueryString(?string $queryString): self
    {
        $this->queryString = $queryString;
        return $this;
    }

    public function getQueryTemplate(): ?string
    {
        return $this->queryTemplate;
    }

    public function setQueryTemplate(?string $queryTemplate): self
    {
        $this->queryTemplate = $queryTemplate;
        return $this;
    }

}
