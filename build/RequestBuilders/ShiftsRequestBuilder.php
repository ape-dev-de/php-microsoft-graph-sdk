<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Shift;
use ApeDevDe\MicrosoftGraphSdk\Models\ShiftCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ShiftQueryOptions;

/**
 * Request builder for Shift
 */
class ShiftsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ShiftQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ShiftQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ShiftCollectionResponse
     */
    public function get(?ShiftQueryOptions $options = null, ?array $queryParameters = null): ShiftCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ShiftCollectionResponse::class);
    }

    /**
     * Create a new Shift
     *
     * @param Shift $item The item to create
     * @return Shift
     */
    public function post(Shift $item): Shift
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Shift::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ShiftItemRequestBuilder
     */
    public function byId(string $id): ShiftItemRequestBuilder
    {
        return new ShiftItemRequestBuilder($this->client, $this->buildPath($id));
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
