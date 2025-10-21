<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SchemaExtension;
use ApeDevDe\MicrosoftGraphSdk\Models\SchemaExtensionCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\SchemaExtensionQueryOptions;

/**
 * Request builder for SchemaExtension
 */
class SchemaExtensionsRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new SchemaExtensionQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param SchemaExtensionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return SchemaExtensionCollectionResponse
     */
    public function get(?SchemaExtensionQueryOptions $options = null, ?array $queryParameters = null): SchemaExtensionCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, SchemaExtensionCollectionResponse::class);
    }

    /**
     * Create a new SchemaExtension
     *
     * @param SchemaExtension $item The item to create
     * @return SchemaExtension
     */
    public function post(SchemaExtension $item): SchemaExtension
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, SchemaExtension::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return SchemaExtensionItemRequestBuilder
     */
    public function byId(string $id): SchemaExtensionItemRequestBuilder
    {
        return new SchemaExtensionItemRequestBuilder($this->client, $this->buildPath($id));
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
