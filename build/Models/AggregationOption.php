<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AggregationOption
 */
class AggregationOption
{
    /**
     */
    private ?string $bucketDefinition;

    /**
     * Computes aggregation on the field while the field exists in the current entity type. Required.
     */
    private ?string $field;

    /**
     * The number of searchBucket resources to be returned. This isn''t required when the range is provided manually in the search request. The minimum accepted size is 1, and the maximum is 65535. Optional.
     */
    private ?string $size;


    public function getBucketDefinition(): ?string
    {
        return $this->bucketDefinition;
    }

    public function setBucketDefinition(?string $bucketDefinition): self
    {
        $this->bucketDefinition = $bucketDefinition;
        return $this;
    }

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setField(?string $field): self
    {
        $this->field = $field;
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): self
    {
        $this->size = $size;
        return $this;
    }

}
