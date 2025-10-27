<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewNotificationRecipientQueryScope
 */
class AccessReviewNotificationRecipientQueryScope
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Represents the query for who the recipients are. For example, /groups/{group id}/members for group members and /users/{user id} for a specific user. */
    public ?string $query = null;

    /** In the scenario where reviewers need to be specified dynamically, indicates the relative source of the query. This property is only required if a relative query (that is, ./manager) is specified. */
    public ?string $queryRoot = null;

    /** Indicates the type of query. Allowed value is MicrosoftGraph. */
    public ?string $queryType = null;


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
        if (isset($data['queryRoot'])) {
            $this->queryRoot = $data['queryRoot'];
        }
        if (isset($data['queryType'])) {
            $this->queryType = $data['queryType'];
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
