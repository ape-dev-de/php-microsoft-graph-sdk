<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AggregationOption
 */
class AggregationOption
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?BucketAggregationDefinition $bucketDefinition = null;

    /** Computes aggregation on the field while the field exists in the current entity type. Required. */
    public ?string $field = null;

    /** The number of searchBucket resources to be returned. This isn't required when the range is provided manually in the search request. The minimum accepted size is 1, and the maximum is 65535. Optional. */
    public ?float $size = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['bucketDefinition'])) {
            $this->bucketDefinition = is_array($data['bucketDefinition']) ? new BucketAggregationDefinition($data['bucketDefinition']) : $data['bucketDefinition'];
        }
        if (isset($data['field'])) {
            $this->field = $data['field'];
        }
        if (isset($data['size'])) {
            $this->size = is_numeric($data['size']) ? (float)$data['size'] : $data['size'];
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
