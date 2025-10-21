<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventQuery
 */
class SecurityEventQuery
{
    /**
     * Represents unique identification for the  query. ''Asset ID'' for SharePoint Online and OneDrive for Business, ''keywords'' for Exchange Online.
     */
    private ?string $query;

    /**
     * Represents the type of query associated with an event. ''files'' for SPO and ODB and ''messages'' for EXO.The possible values are: files, messages, unknownFutureValue.
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
