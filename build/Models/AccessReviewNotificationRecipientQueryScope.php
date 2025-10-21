<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewNotificationRecipientQueryScope
 */
class AccessReviewNotificationRecipientQueryScope
{
    /**
     * Represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user.
     */
    private ?string $query;

    /**
     * In the scenario where reviewers need to be specified dynamically, indicates the relative source of the query. This property is only required if a relative query (that is, ./manager) is specified.
     */
    private ?string $queryRoot;

    /**
     * Indicates the type of query. Allowed value is MicrosoftGraph.
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
