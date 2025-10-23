<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BucketAggregationRange
 */
class BucketAggregationRange
{
    /** Defines the lower bound from which to compute the aggregation. This can be a numeric value or a string representation of a date using the YYYY-MM-DDTHH:mm:ss.sssZ format. Required. */
    public ?string $from = null;

    /** Defines the upper bound up to which to compute the aggregation. This can be a numeric value or a string representation of a date using the YYYY-MM-DDTHH:mm:ss.sssZ format. Required. */
    public ?string $to = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['from'])) {
            $this->from = $data['from'];
        }
        if (isset($data['to'])) {
            $this->to = $data['to'];
        }
    }
}
