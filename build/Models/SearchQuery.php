<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchQuery
 */
class SearchQuery
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The search query containing the search terms. Required. */
    public ?string $queryString = null;

    /** Provides a way to decorate the query string. Supports both KQL and query variables. Optional. */
    public ?string $queryTemplate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['queryString'])) {
            $this->queryString = $data['queryString'];
        }
        if (isset($data['queryTemplate'])) {
            $this->queryTemplate = $data['queryTemplate'];
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
