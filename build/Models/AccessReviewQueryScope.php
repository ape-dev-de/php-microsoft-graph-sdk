<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewQueryScope
 */
class AccessReviewQueryScope
{
    /**
     * The query representing what will be reviewed in an access review.
     */
    private ?string $query;

    /**
     * In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager.
     */
    private ?string $queryRoot;

    /**
     * Indicates the type of query. Types include MicrosoftGraph and ARM.
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
