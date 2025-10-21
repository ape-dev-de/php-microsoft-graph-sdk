<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SwapShiftsChangeRequest;
use ApeDevDe\MicrosoftGraphSdk\Models\SwapShiftsChangeRequestCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SwapShiftsChangeRequestQueryOptions;

/**
 * Request builder for SwapShiftsChangeRequest
 */
class SwapShiftsChangeRequestsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SwapShiftsChangeRequestQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SwapShiftsChangeRequestQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SwapShiftsChangeRequestCollectionResponse
     */
    public function get(?SwapShiftsChangeRequestQueryOptions $options = null, ?array $queryParameters = null): SwapShiftsChangeRequestCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SwapShiftsChangeRequestCollectionResponse::class);
    }

    /**
     * Create a new SwapShiftsChangeRequest
     *
     * @param SwapShiftsChangeRequest $item The item to create
     * @return SwapShiftsChangeRequest
     */
    public function post(SwapShiftsChangeRequest $item): SwapShiftsChangeRequest
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SwapShiftsChangeRequest::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SwapShiftsChangeRequestItemRequestBuilder
     */
    public function byId(string $id): SwapShiftsChangeRequestItemRequestBuilder
    {
        return new SwapShiftsChangeRequestItemRequestBuilder($this->client, $this->buildPath($id));
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
