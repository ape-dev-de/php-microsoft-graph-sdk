<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAggregation
 */
class SearchAggregation
{
    public function __construct(
        /**  */
        public array $buckets = [],
        /**  */
        public ?string $field = null
    ) {}
}
