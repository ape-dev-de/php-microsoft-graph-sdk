<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BucketAggregationDefinition
 */
class BucketAggregationDefinition
{
    /**
     * True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional.
     */
    private ?bool $isDescending;

    /**
     * The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional.
     */
    private ?float $minimumCount;

    /**
     * A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional.
     */
    private ?string $prefixFilter;

    /**
     * Specifies the manual ranges to compute the aggregations. This is only valid for nonstring refiners of date or numeric type. Optional.
     */
    private array $ranges = [];

    /**
     */
    private ?string $sortBy;


    public function getIsDescending(): ?bool
    {
        return $this->isDescending;
    }

    public function setIsDescending(?bool $isDescending): self
    {
        $this->isDescending = $isDescending;
        return $this;
    }

    public function getMinimumCount(): ?float
    {
        return $this->minimumCount;
    }

    public function setMinimumCount(?float $minimumCount): self
    {
        $this->minimumCount = $minimumCount;
        return $this;
    }

    public function getPrefixFilter(): ?string
    {
        return $this->prefixFilter;
    }

    public function setPrefixFilter(?string $prefixFilter): self
    {
        $this->prefixFilter = $prefixFilter;
        return $this;
    }

    public function getRanges(): array
    {
        return $this->ranges;
    }

    public function setRanges(array $ranges): self
    {
        $this->ranges = $ranges;
        return $this;
    }

    public function getSortBy(): ?string
    {
        return $this->sortBy;
    }

    public function setSortBy(?string $sortBy): self
    {
        $this->sortBy = $sortBy;
        return $this;
    }

}
