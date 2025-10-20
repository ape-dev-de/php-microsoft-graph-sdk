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
     */
    private array $clauses = [];

    /**
     * Human-readable name of the filter group.
     */
    private ?string $name;

    public function getClauses(): array
    {
        return $this->clauses;
    }

    public function setClauses(array $clauses): self
    {
        $this->clauses = $clauses;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
