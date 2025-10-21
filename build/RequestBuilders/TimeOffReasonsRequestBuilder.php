<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOffReason;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOffReasonCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TimeOffReasonQueryOptions;

/**
 * Request builder for TimeOffReason
 */
class TimeOffReasonsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TimeOffReasonQueryOptions())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param TimeOffReasonQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TimeOffReasonCollectionResponse
     */
    public function get(?TimeOffReasonQueryOptions $options = null, ?array $queryParameters = null): TimeOffReasonCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TimeOffReasonCollectionResponse::class);
    }

    /**
     * Create a new TimeOffReason
     *
     * @param TimeOffReason $item The item to create
     * @return TimeOffReason
     */
    public function post(TimeOffReason $item): TimeOffReason
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeOffReason::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TimeOffReasonItemRequestBuilder
     */
    public function byId(string $id): TimeOffReasonItemRequestBuilder
    {
        return new TimeOffReasonItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->getFullPath() . '/$count');
        return (int) $response->getBody()->getContents();
    }

}
