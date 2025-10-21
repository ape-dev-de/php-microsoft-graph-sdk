<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryDefinition;
use ApeDevDe\MicrosoftGraphSdk\Models\DirectoryDefinitionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\DirectoryDefinitionQueryOptions;

/**
 * Request builder for DirectoryDefinition
 */
class DirectoriesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new DirectoryDefinitionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param DirectoryDefinitionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return DirectoryDefinitionCollectionResponse
     */
    public function get(?DirectoryDefinitionQueryOptions $options = null, ?array $queryParameters = null): DirectoryDefinitionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, DirectoryDefinitionCollectionResponse::class);
    }

    /**
     * Create a new DirectoryDefinition
     *
     * @param DirectoryDefinition $item The item to create
     * @return DirectoryDefinition
     */
    public function post(DirectoryDefinition $item): DirectoryDefinition
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, DirectoryDefinition::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return DirectoryDefinitionItemRequestBuilder
     */
    public function byId(string $id): DirectoryDefinitionItemRequestBuilder
    {
        return new DirectoryDefinitionItemRequestBuilder($this->client, $this->buildPath($id));
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
