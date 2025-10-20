<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Directory;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryQueryOptions;

/**
 * Request builder for Directory collection
 */
class DirectoryRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DirectoryQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DirectoryQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DirectoryCollectionResponse
     */
    public function get(?DirectoryQueryOptions $options = null, ?array $queryParameters = null): DirectoryCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DirectoryCollectionResponse::class);
    }

    /**
     * Create a new Directory
     *
     * @param Directory $item The item to create
     * @return Directory
     */
    public function post(Directory $item): Directory
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Directory::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DirectoryItemRequestBuilder
     */
    public function byId(string $id): DirectoryItemRequestBuilder
    {
        return new DirectoryItemRequestBuilder($this->client, $this->buildPath($id));
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
