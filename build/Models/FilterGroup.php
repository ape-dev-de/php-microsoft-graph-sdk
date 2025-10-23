<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterGroup
 */
class FilterGroup
{
    /** 
     * Filter clauses (conditions) of this group. All clauses in a group must be satisfied in order for the filter group to evaluate to true.
     * @var FilterClause[]
     */
    public array $clauses = [];

    /** Human-readable name of the filter group. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['clauses'])) {
            $this->clauses = $data['clauses'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
