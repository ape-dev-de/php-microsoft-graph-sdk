<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchBucket
 */
class SearchBucket
{
    /**
     * A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format ''{field}:/''{aggregationFilterToken}/''''. See an example.
     */
    private ?string $aggregationFilterToken;

    /**
     * The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches.
     */
    private ?float $count;

    /**
     * The discrete value of the field that an aggregation was computed on.
     */
    private ?string $key;

    public function getAggregationFilterToken(): ?string
    {
        return $this->aggregationFilterToken;
    }

    public function setAggregationFilterToken(?string $aggregationFilterToken): self
    {
        $this->aggregationFilterToken = $aggregationFilterToken;
        return $this;
    }

    public function getCount(): ?float
    {
        return $this->count;
    }

    public function setCount(?float $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

}
