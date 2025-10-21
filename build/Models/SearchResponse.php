<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchResponse
 */
class SearchResponse
{
    /**
     * A collection of search results.
     */
    private array $hitsContainers = [];

    /**
     * Provides information related to spelling corrections in the alteration response.
     */
    private ?string $queryAlterationResponse;

    /**
     * A dictionary of resultTemplateIds and associated values, which include the name and JSON schema of the result templates.
     */
    private ?string $resultTemplates;

    /**
     * Contains the search terms sent in the initial search query.
     * @var string[]
     */
    private array $searchTerms = [];


    public function getHitsContainers(): array
    {
        return $this->hitsContainers;
    }

    public function setHitsContainers(array $hitsContainers): self
    {
        $this->hitsContainers = $hitsContainers;
        return $this;
    }

    public function getQueryAlterationResponse(): ?string
    {
        return $this->queryAlterationResponse;
    }

    public function setQueryAlterationResponse(?string $queryAlterationResponse): self
    {
        $this->queryAlterationResponse = $queryAlterationResponse;
        return $this;
    }

    public function getResultTemplates(): ?string
    {
        return $this->resultTemplates;
    }

    public function setResultTemplates(?string $resultTemplates): self
    {
        $this->resultTemplates = $resultTemplates;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSearchTerms(): array
    {
        return $this->searchTerms;
    }

    /**
     * @param string[] $searchTerms
     */
    public function setSearchTerms(array $searchTerms): self
    {
        $this->searchTerms = $searchTerms;
        return $this;
    }

}
