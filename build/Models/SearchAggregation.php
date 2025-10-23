<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAggregation
 */
class SearchAggregation
{
    /** 
     * 
     * @var SearchBucket[]
     */
    public array $buckets = [];

    /**  */
    public ?string $field = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['buckets'])) {
            $this->buckets = $data['buckets'];
        }
        if (isset($data['field'])) {
            $this->field = $data['field'];
        }
    }
}
