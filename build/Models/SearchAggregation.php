<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAggregation
 */
class SearchAggregation
{
    /**
     */
    private array $buckets = [];

    /**
     */
    private ?string $field;


    public function getBuckets(): array
    {
        return $this->buckets;
    }

    public function setBuckets(array $buckets): self
    {
        $this->buckets = $buckets;
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

}
