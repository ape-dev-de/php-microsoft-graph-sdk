<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewReviewerScope
 */
class AccessReviewReviewerScope
{
    /**
     * The query specifying who will be the reviewer.
     */
    private ?string $query;

    /**
     * In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query, for example, ./manager, is specified. Possible value: decisions.
     */
    private ?string $queryRoot;

    /**
     * The type of query. Examples include MicrosoftGraph and ARM.
     */
    private ?string $queryType;

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;
        return $this;
    }

    public function getQueryRoot(): ?string
    {
        return $this->queryRoot;
    }

    public function setQueryRoot(?string $queryRoot): self
    {
        $this->queryRoot = $queryRoot;
        return $this;
    }

    public function getQueryType(): ?string
    {
        return $this->queryType;
    }

    public function setQueryType(?string $queryType): self
    {
        $this->queryType = $queryType;
        return $this;
    }

}
