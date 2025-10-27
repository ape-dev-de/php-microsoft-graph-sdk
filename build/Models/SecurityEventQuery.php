<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventQuery
 */
class SecurityEventQuery
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Represents unique identification for the  query. 'Asset ID' for SharePoint Online and OneDrive for Business, 'keywords' for Exchange Online. */
    public ?string $query = null;

    /** 
     * Represents the type of query associated with an event. 'files' for SPO and ODB and 'messages' for EXO.The possible values are: files, messages, unknownFutureValue.
     * @var SecurityQueryType|\stdClass|null
     */
    public SecurityQueryType|\stdClass|null $queryType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['query'])) {
            $this->query = $data['query'];
        }
        if (isset($data['queryType'])) {
            $this->queryType = is_array($data['queryType']) ? new SecurityQueryType($data['queryType']) : $data['queryType'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
