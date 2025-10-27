<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchBucket
 */
class SearchBucket
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example. */
    public ?string $aggregationFilterToken = null;

    /** The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches. */
    public ?float $count = null;

    /** The discrete value of the field that an aggregation was computed on. */
    public ?string $key = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['aggregationFilterToken'])) {
            $this->aggregationFilterToken = $data['aggregationFilterToken'];
        }
        if (isset($data['count'])) {
            $this->count = is_numeric($data['count']) ? (float)$data['count'] : $data['count'];
        }
        if (isset($data['key'])) {
            $this->key = $data['key'];
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
