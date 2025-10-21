<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterGroup
 */
class FilterGroup
{
    public function __construct(
        /** Filter clauses (conditions) of this group. All clauses in a group must be satisfied in order for the filter group to evaluate to true. */
        public array $clauses = [],
        /** Human-readable name of the filter group. */
        public ?string $name = null
    ) {}
}
