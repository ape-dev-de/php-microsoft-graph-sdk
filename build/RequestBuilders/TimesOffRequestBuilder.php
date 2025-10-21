<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOff;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeOffCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\TimeOffQueryOptions;

/**
 * Request builder for TimeOff
 */
class TimesOffRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new TimeOffQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param TimeOffQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return TimeOffCollectionResponse
     */
    public function get(?TimeOffQueryOptions $options = null, ?array $queryParameters = null): TimeOffCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, TimeOffCollectionResponse::class);
    }

    /**
     * Create a new TimeOff
     *
     * @param TimeOff $item The item to create
     * @return TimeOff
     */
    public function post(TimeOff $item): TimeOff
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, TimeOff::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return TimeOffItemRequestBuilder
     */
    public function byId(string $id): TimeOffItemRequestBuilder
    {
        return new TimeOffItemRequestBuilder($this->client, $this->buildPath($id));
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
