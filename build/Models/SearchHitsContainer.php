<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchHitsContainer
 */
class SearchHitsContainer
{
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
}
