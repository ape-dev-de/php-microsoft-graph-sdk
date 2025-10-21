<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ListModel;
use ApeDevDe\MicrosoftGraphSdk\Models\ListModelCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ListModelQueryOptions;

/**
 * Request builder for ListModel
 */
class ListsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ListModelQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ListModelQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ListModelCollectionResponse
     */
    public function get(?ListModelQueryOptions $options = null, ?array $queryParameters = null): ListModelCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ListModelCollectionResponse::class);
    }

    /**
     * Create a new ListModel
     *
     * @param ListModel $item The item to create
     * @return ListModel
     */
    public function post(ListModel $item): ListModel
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ListModel::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ListItemRequestBuilder
     */
    public function byId(string $id): ListItemRequestBuilder
    {
        return new ListItemRequestBuilder($this->client, $this->buildPath($id));
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
