<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\ExtensionProperty;
use ApeDevDe\MicrosoftGraphSdk\Models\ExtensionPropertyCollectionResponse;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\ExtensionPropertyQueryOptions;

/**
 * Request builder for ExtensionProperty
 */
class ExtensionPropertiesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get collection with optional query parameters
     *
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new ExtensionPropertyQueryOptions())->top(10)->select(['displayName', 'mail']))
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
     * @param ExtensionPropertyQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return ExtensionPropertyCollectionResponse
     */
    public function get(?ExtensionPropertyQueryOptions $options = null, ?array $queryParameters = null): ExtensionPropertyCollectionResponse
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, ExtensionPropertyCollectionResponse::class);
    }

    /**
     * Create a new ExtensionProperty
     *
     * @param ExtensionProperty $item The item to create
     * @return ExtensionProperty
     */
    public function post(ExtensionProperty $item): ExtensionProperty
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, ExtensionProperty::class);
    }

    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return ExtensionPropertyItemRequestBuilder
     */
    public function byId(string $id): ExtensionPropertyItemRequestBuilder
    {
        return new ExtensionPropertyItemRequestBuilder($this->client, $this->buildPath($id));
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
