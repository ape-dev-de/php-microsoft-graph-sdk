<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchHitsContainer
 */
class SearchHitsContainer
{
    /**
     */
    private array $aggregations = [];

    /**
     * A collection of the search results.
     */
    private array $hits = [];

    /**
     * Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly.
     */
    private ?bool $moreResultsAvailable;

    /**
     * The total number of results. Note this isn''t the number of results on the page, but the total number of results satisfying the query.
     */
    private ?string $total;

    public function getAggregations(): array
    {
        return $this->aggregations;
    }

    public function setAggregations(array $aggregations): self
    {
        $this->aggregations = $aggregations;
        return $this;
    }

    public function getHits(): array
    {
        return $this->hits;
    }

    public function setHits(array $hits): self
    {
        $this->hits = $hits;
        return $this;
    }

    public function getMoreResultsAvailable(): ?bool
    {
        return $this->moreResultsAvailable;
    }

    public function setMoreResultsAvailable(?bool $moreResultsAvailable): self
    {
        $this->moreResultsAvailable = $moreResultsAvailable;
        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;
        return $this;
    }

}
