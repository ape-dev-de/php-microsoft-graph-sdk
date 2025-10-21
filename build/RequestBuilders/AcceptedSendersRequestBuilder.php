<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObject;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryObjectCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryObjectQueryOptions;

/**
 * Request builder for DirectoryObject
 */
class AcceptedSendersRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DirectoryObjectQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DirectoryObjectQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DirectoryObjectCollectionResponse
     */
    public function get(?DirectoryObjectQueryOptions $options = null, ?array $queryParameters = null): DirectoryObjectCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DirectoryObjectCollectionResponse::class);
    }

    /**
     * Create a new DirectoryObject
     *
     * @param DirectoryObject $item The item to create
     * @return DirectoryObject
     */
    public function post(DirectoryObject $item): DirectoryObject
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryObject::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return GroupItemRequestBuilder
     */
    public function byId(string $id): GroupItemRequestBuilder
    {
        return new GroupItemRequestBuilder($this->client, $this->buildPath($id));
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
