<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Connection;
use ApeDevDe\MicrosoftGraphSdk\Models\ConnectionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ConnectionQueryOptions;

/**
 * Request builder for Connection collection
 */
class ConnectionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ConnectionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ConnectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ConnectionCollectionResponse
     */
    public function get(?ConnectionQueryOptions $options = null, ?array $queryParameters = null): ConnectionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ConnectionCollectionResponse::class);
    }

    /**
     * Create a new Connection
     *
     * @param Connection $item The item to create
     * @return Connection
     */
    public function post(Connection $item): Connection
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Connection::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ConnectionItemRequestBuilder
     */
    public function byId(string $id): ConnectionItemRequestBuilder
    {
        return new ConnectionItemRequestBuilder($this->client, $this->buildPath($id));
    }

    /**
     * Get count of items in collection
     *
     * @return int
     */
    public function count(): int
    {
        $response = $this->client->get($this->buildPath('$count'));
        return (int) $response->getBody()->getContents();
    }

}
