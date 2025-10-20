<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Base class for OData query options
 */
abstract class QueryOptions
{
    protected ?int $top = null;
    protected ?int $skip = null;
    protected ?string $filter = null;
    protected ?string $orderby = null;
    protected ?string $search = null;
    protected ?bool $count = null;
    protected ?string $expand = null;
    protected ?array $select = null;

    /**
     * Limit the number of results
     */
    public function top(int $top): static
    {
        $this->top = $top;
        return $this;
    }

    /**
     * Skip a number of results
     */
    public function skip(int $skip): static
    {
        $this->skip = $skip;
        return $this;
    }

    /**
     * Filter results with OData filter expression
     * 
     * @param string $filter Example: "startsWith(displayName,'John')"
     */
    public function filter(string $filter): static
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Order results
     * 
     * @param string $orderby Example: "displayName desc"
     */
    public function orderby(string $orderby): static
    {
        $this->orderby = $orderby;
        return $this;
    }

    /**
     * Search with full-text search
     * 
     * @param string $search Example: '"displayName:John"'
     */
    public function search(string $search): static
    {
        $this->search = $search;
        return $this;
    }

    /**
     * Include count of items
     */
    public function count(bool $count = true): static
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Expand related resources
     * 
     * @param string $expand Example: "manager"
     */
    public function expand(string $expand): static
    {
        $this->expand = $expand;
        return $this;
    }

    /**
     * Select specific properties
     * 
     * @param array<string> $select Array of property names
     */
    public function select(array $select): static
    {
        $this->select = $select;
        return $this;
    }

    /**
     * Convert to array for HTTP query
     */
    public function toArray(): array
    {
        $params = [];

        if ($this->top !== null) {
            $params['$top'] = $this->top;
        }

        if ($this->skip !== null) {
            $params['$skip'] = $this->skip;
        }

        if ($this->filter !== null) {
            $params['$filter'] = $this->filter;
        }

        if ($this->orderby !== null) {
            $params['$orderby'] = $this->orderby;
        }

        if ($this->search !== null) {
            $params['$search'] = $this->search;
        }

        if ($this->count !== null) {
            $params['$count'] = $this->count ? 'true' : 'false';
        }

        if ($this->expand !== null) {
            $params['$expand'] = $this->expand;
        }

        if ($this->select !== null && !empty($this->select)) {
            $params['$select'] = implode(',', $this->select);
        }

        return $params;
    }
}
