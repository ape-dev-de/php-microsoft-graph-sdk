<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Planner
 */
class Planner
{
    public function __construct(
        /** Read-only. Nullable. Returns a collection of the specified buckets */
        public array $buckets = [],
        /** Read-only. Nullable. Returns a collection of the specified plans */
        public array $plans = [],
        /** @var string[] Read-only. Nullable. Returns a collection of the specified tasks */
        public array $tasks = []
    ) {}
}
