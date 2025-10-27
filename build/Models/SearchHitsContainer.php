<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchHitsContainer
 */
class SearchHitsContainer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var SearchAggregation[]
     */
    public array $aggregations = [];

    /** 
     * A collection of the search results.
     * @var SearchHit[]
     */
    public array $hits = [];

    /** Provides information if more results are available. Based on this information, you can adjust the from and size properties of the searchRequest accordingly. */
    public ?bool $moreResultsAvailable = null;

    /** The total number of results. Note this isn't the number of results on the page, but the total number of results satisfying the query. */
    public ?float $total = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['aggregations'])) {
            $this->aggregations = $data['aggregations'];
        }
        if (isset($data['hits'])) {
            $this->hits = $data['hits'];
        }
        if (isset($data['moreResultsAvailable'])) {
            $this->moreResultsAvailable = $data['moreResultsAvailable'];
        }
        if (isset($data['total'])) {
            $this->total = $data['total'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
